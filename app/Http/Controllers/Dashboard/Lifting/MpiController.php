<?php

namespace App\Http\Controllers\Dashboard\Lifting;

use \DB;
use App\Actions\Lifting\Mpi\StoreMpiAction;
use App\Actions\Lifting\Mpi\UpdateMpiAction;
use App\Helper\ImageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Lifting\Mpi\MpiStoreRequest;
use App\Http\Requests\Dashboard\Lifting\Mpi\MpiUpdateRequest;
use App\Models\Dashboard\Lifting\Mpi;
use App\Models\Dashboard\Order;

use App\ViewModels\Dashboard\MpiView\MpiViewModel;
use Dompdf\Dompdf;
use Dompdf\Options;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use PDF;

class MpiController extends Controller
{
    use ImageHelper;

    // use ZipArchive;

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        try {
            $data = session('searchedItems', Mpi::paginate('30'));
            $orders = Order::get();
            return view('dashboard.pages.lifting.mpi.view', compact('data', 'orders'));
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
            $mpi = Mpi::FindOrFail($id);
            $pdf = PDF::loadView('website.reports.pages.Lifting.MPI.mpi', compact('mpi'));
            return $pdf->stream($mpi->report_number . '.pdf');
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
            Mpi::FindOrFail($id)->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return redirect()->route('mpi.reports.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function filter(Request $request)
    {
        try {

            $dara = Mpi::where('order_id', $request->order_id)->orWhere('serial', $request->serial)->paginate('100');

            $orders = Order::get();
            return view('dashboard.pages.lifting.mpi.view', compact('data', 'orders'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
