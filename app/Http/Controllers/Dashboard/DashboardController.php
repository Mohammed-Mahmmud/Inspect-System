<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

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
            $ids = json_decode($request->data[0], true);
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
    public function search(Request $request)
    {
        try {
            if (isset($request->search) && class_exists($request->model)) {
                $searchedItems = $request->model::where('type', $request->type)->whereAny(['report_number', 'serial', 'date'], 'LIKE', "%$request->search%")->paginate(1000);
                if ($searchedItems->isNotEmpty()) {
                    toastr($searchedItems->count() . ' ' . "Result Found", 'success', 'Success Search');
                    return redirect($request->route)->with(['searchedItems' => $searchedItems, 'type' => $request->type]);
                } else {
                    $searchedItems = $request->model::where('type', $request->type)->paginate('1000');
                    toastr('Result Not Found', 'error', 'Failed Search');
                    return redirect($request->route)->with(['searchedItems' => $searchedItems, 'type' => $request->type]);
                }
            } else {
                $searchedItems = $request->model::where('type', $request->type)->paginate('1000');
                toastr('Result Not Found', 'warning', 'Failed Search');
                return redirect($request->route)->with(['searchedItems' => $searchedItems, 'type' => $request->type]);
            }
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
