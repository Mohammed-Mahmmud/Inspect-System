<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use ZipArchive;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.home');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function deleteAll(Request $request)
    {
        try {
            $ids = json_decode($request->data, true);
            if (isset($ids)) {
                foreach ($ids as $id) {
                    try {
                        $request->model::FindOrFail($id)->delete();
                    } catch (ModelNotFoundException $e) {
                        continue;
                    }
                }
                toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            } else {
                toastr(trans('Dashboard/toastr.unCheckedMessage'), 'warning', trans('Dashboard/toastr.unChecked'));
            }
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        return redirect()->back();
    }

    public function downloadAll(Request $request,)
    {
        try {
            $ids = json_decode($request->data, true);
            if (isset($ids)) {
                $zip = new ZipArchive();
                $zipFileName = 'Reports.zip';
                $zipFilePath = storage_path("app/$zipFileName");

                if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
                    foreach ($ids as $id) {
                        try {

                            // Retrieve the model instance
                            $data = $request->model::FindOrFail($id);

                            // Load the PDF view with the model data
                            $pdf = PDF::loadView($request->pdfView, compact('data'));

                            // Define the file name
                            $fileName = $data->report_number
                                ? str_replace('/', '-', ucwords($data->report_number)) . '.pdf'
                                : str_replace('/', '-', ucwords($data->getOrders->name)) . '.pdf';
                            // Add the PDF file to the ZIP archive
                            $zip->addFromString($fileName, @$pdf->output());
                        } catch (ModelNotFoundException $e) {
                            // Skip the current iteration if the model is not found
                            continue;
                        }
                    }
                    // Close the ZIP archive
                    $zip->close();

                    // Return the ZIP file as a download response and delete it after sending
                    return response()->download($zipFilePath)->deleteFileAfterSend(true);
                } else {
                    // Return an error response if the ZIP archive could not be created
                    return response()->json(['error' => 'Failed to create ZIP file.'], 500);
                }
            }
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        return redirect()->back();
    }
}
