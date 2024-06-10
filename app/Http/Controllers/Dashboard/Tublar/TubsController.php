<?php

namespace App\Http\Controllers\Dashboard\Tublar;

use App\Actions\Tublar\Tubs\DeleteTubsAction;
use App\Actions\Tublar\Tubs\StoreTubsAction;
use App\Actions\Tublar\Tubs\UpdateTubsAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Tublar\Tubs\TubsStoreRequest;
use App\Http\Requests\Dashboard\Tublar\Tubs\TubsUpdateRequest;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\Tubs\Tubs;
use App\ViewModels\Dashboard\TubsView\TubsViewModel;
use Exception;
use Illuminate\Http\Request;
use PDF;

class TubsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $data = session('searchedItems', Tubs::where('type', $request->type)->paginate(1)->withQueryString());
            $type = session('type', $request->type);
            $orders = Order::get();
            return view('dashboard.pages.tublar.tubs.view', compact('data', 'orders', 'type'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            return view('dashboard.pages.tublar.tubs.crud', new TubsViewModel($request->type));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TubsStoreRequest $request)
    {
        try {
            app(StoreTubsAction::class)->handle($request->validated());
            return redirect()->route('tubs.reports.create', ['type' => $request->type]);
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
            $tubs = Tubs::FindOrFail($id);
            $pdf = PDF::loadView('website.reports.pages.Tublar.Tubs.report', compact('tubs'))->setPaper('a4', 'landscape');
            return $pdf->stream($tubs->report_numer . '.pdf');
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
            $tubs = Tubs::FindOrFail($id);
            return view('dashboard.pages.tublar.tubs.crud', new TubsViewModel($tubs->type, $tubs));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function repeat(string $id)
    {
        try {
            $tubs = Tubs::FindOrFail($id);
            return view('dashboard.pages.tublar.tubs.crud', new TubsViewModel($tubs->type, $tubs));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    /**
     * Update the specified resource in storage.
     */

    public function update(TubsUpdateRequest $request, string $id)
    {
        try {
            $tubs = Tubs::FindOrFail($id);
            app(UpdateTubsAction::class)->handle($tubs, $request->validated());
            return redirect()->route('tubs.reports.index', ['type' => $tubs->type]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        try {
            $tubs = Tubs::FindOrFail($id);
            app(DeleteTubsAction::class)->handle($tubs);
            return redirect()->route('tubs.reports.index', ['type' => $tubs->type]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function download($id)
    {
        try {
            $tubs = Tubs::FindOrFail($id);
            $pdf = PDF::loadView('website.reports.pages.Tublar.Tubs.report', compact('tubs'))->setPaper('a4', 'landscape');
            return $pdf->download($tubs->report_numer . '.pdf');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
