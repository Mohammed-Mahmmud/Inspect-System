<?php

namespace App\Http\Controllers\Dashboard\Tublar;

use App\Actions\Tublar\Tubs\Summary\DeleteSummaryAction;
use App\Actions\Tublar\Tubs\Summary\StoreSummaryAction;
use App\Actions\Tublar\Tubs\Summary\UpdateSummaryAction;
use App\Helper\ReportsTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Tublar\Tubs\SummaryRequest;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\Tubs\Summary;
use App\ViewModels\Dashboard\TubsView\SummaryViewModel;
use Exception;
use Illuminate\Http\Request;
use PDF;

class TubsSummaryController extends Controller
{
    use ReportsTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $data = Summary::orderBy('id', 'desc')->where(['type' => $request->type])->paginate(30)->withQueryString();
            $data = $this->reportStatus($data);
            $type = $request->type;
            $pdfView = $data::PDFVIEW;
            $orders = Order::get();
            return view('dashboard.pages.tublar.tubs.summary.view', compact('data', 'orders', 'type', 'pdfView'));
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
            return view('dashboard.pages.tublar.tubs.summary.crud', new SummaryViewModel($request->type));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SummaryRequest $request)
    {
        try {
            app(StoreSummaryAction::class)->handle($request->summaryStore()->validated());
            return redirect()->route('tubs.summary.create', ['type' => $request->type]);
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
            $data = Summary::FindOrFail($id);
            $pdf = PDF::loadView($data::PDFVIEW, compact('data'))->setPaper('a4', $data::PDFPAPER);
            return $pdf->stream($data->report_number  . '.pdf');
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
            $data = Summary::FindOrFail($id);
            $this->reportAuthChecker($data->user_id);
            return view('dashboard.pages.tublar.tubs.summary.crud', new SummaryViewModel($data->type, $data));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function repeat(string $id)
    {
        try {
            $data = Summary::FindOrFail($id);
            return view('dashboard.pages.tublar.tubs.summary.crud', new SummaryViewModel($data->type, $data));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    /**
     * Update the specified resource in storage.
     */

    public function update(SummaryRequest $request, string $id)
    {
        try {
            $data = Summary::FindOrFail($id);
            app(UpdateSummaryAction::class)->handle($data, $request->summaryUpdate()->validated());
            return redirect()->route('tubs.summary.index', ['type' => $data->type]);
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
            $data = Summary::FindOrFail($id);
            app(DeleteSummaryAction::class)->handle($data);
            return redirect()->route('tubs.summary.index', ['type' => $data->type]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function download($id)
    {
        try {
            $data = Summary::FindOrFail($id);
            $pdf = PDF::loadView($data::PDFVIEW, compact('data'))->setPaper('a4', $data::PDFPAPER);
            return $pdf->download($data->report_number  . '.pdf');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
