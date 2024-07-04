<?php

namespace App\Http\Controllers\Dashboard\Lifting;

use App\Actions\Lifting\Mpi\StoreMpiAction;
use App\Actions\Lifting\Mpi\UpdateMpiAction;
use App\Helper\ImageHelper;
use App\Helper\ReportsTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Lifting\Mpi\MpiStoreRequest;
use App\Http\Requests\Dashboard\Lifting\Mpi\MpiUpdateRequest;
use App\Models\Dashboard\Lifting\Mpi;
use App\Models\Dashboard\Order;
use App\ViewModels\Dashboard\MpiView\MpiViewModel;
use Exception;
use PDF;

class MpiController extends Controller
{
    use ImageHelper, ReportsTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Mpi::paginate('50');
            $data = $this->reportStatus($data);
            $orders = Order::get();
            $pdfView = 'website.reports.pages.Lifting.MPI.mpi';
            return view('dashboard.pages.lifting.mpi.view', compact('data', 'orders', 'pdfView'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        try {
            return view('dashboard.pages.lifting.mpi.crud', new MpiViewModel());
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(MpiStoreRequest $request)
    {
        try {
            app(StoreMpiAction::class)->handle($request->validated());
            toastr(trans('Dashboard/toastr.succes'));
            return redirect()->route('mpi.reports.create');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        try {
            $data = Mpi::FindOrFail($id);
            $pdf = PDF::loadView('website.reports.pages.Lifting.MPI.mpi', compact('data'));
            return $pdf->stream($data->report_number . '.pdf');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        try {
            $mpi = Mpi::FindOrFail($id);
            $this->reportAuthChecker($mpi->user_id);
            return view('dashboard.pages.lifting.mpi.crud', new MpiViewModel($mpi));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function repeat(string $id)
    {
        try {
            $mpi = Mpi::FindOrFail($id);
            return view('dashboard.pages.lifting.mpi.crud', new MpiViewModel($mpi));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    /**
     * Update the specified resource in storage.
     */

    public function update(MpiUpdateRequest $request, $id)
    {
        try {
            $mpi = Mpi::FindOrFail($id);
            app(UpdateMpiAction::class)->handle($mpi, $request->validated());
            toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
            return redirect()->route('mpi.reports.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        try {
            $mpi = Mpi::FindOrFail($id);
            $mpi->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return redirect()->route('mpi.reports.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function download(string $id = null)
    {
        try {
            if (isset($id)) {
                $data = Mpi::FindOrFail($id);
                $pdf = PDF::loadView('website.reports.pages.Lifting.MPI.mpi', compact('data'));
                return $pdf->download($data->report_number . '.pdf');
            }
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
