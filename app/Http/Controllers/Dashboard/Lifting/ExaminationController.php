<?php

namespace App\Http\Controllers\Dashboard\Lifting;

use App\Actions\Lifting\Examination\StoreExaminationAction;
use App\Actions\Lifting\Examination\UpdateExaminationAction;
use App\Helper\ReportsTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Lifting\Examination\ExaminationStoreRequest;
use App\Http\Requests\Dashboard\Lifting\Examination\ExaminationUpdateRequest;
use App\Models\Dashboard\CheckList;
use App\Models\Dashboard\Lifting\Examination;
use App\Models\Dashboard\Order;
use App\ViewModels\Dashboard\ExaminationView\ExaminationViewModel;
use Exception;
use Illuminate\Http\Request;
use PDF;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use ReportsTrait;
    public function index(Request $request)
    {
        try {
            $data = Examination::where('type', $request->type)->paginate('30')->withQueryString();
            $type = $request->type;
            $orders = Order::get();
            return view('dashboard.pages.lifting.examination.view', compact('data', 'orders', 'type'));
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
            return view('dashboard.pages.lifting.examination.crud', new ExaminationViewModel($request->type));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(ExaminationStoreRequest $request)
    {
        try {
            app(StoreExaminationAction::class)->handle($request->validated());
            return redirect()->route('examination.reports.create', ['type' => $request->type]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        try {
            $examination = Examination::FindOrFail($id);
            $pdf = PDF::loadView('website.reports.pages.Lifting.Examination.examination', compact('examination'));
            return $pdf->stream($examination->report_number . '.pdf');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        try {
            $examination = Examination::FindOrFail($id);
            $this->reportAuthChecker($examination->user_id);
            return view('dashboard.pages.lifting.examination.crud', new ExaminationViewModel($examination->type, $examination));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function repeat($id)
    {
        try {
            $examination = Examination::FindOrFail($id);
            return view('dashboard.pages.lifting.examination.crud', new ExaminationViewModel($examination->type, $examination));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    /**
     * Update the specified resource in storage.
     */

    public function update(ExaminationUpdateRequest $request, $id)
    {
        try {
            $examination = Examination::FindOrFail($id);
            app(UpdateExaminationAction::class)->handle($examination, $request->validated());
            return redirect()->route('examination.reports.index', ['type' => $examination->type]);
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
            $examination = Examination::FindOrFail($id);
            CheckList::where('thorough_examination_id', $id)->delete();
            $type = $examination->type;
            $examination->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return redirect()->route('examination.reports.index', ['type' => $type]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function download($id)
    {
        $examination = Examination::FindOrFail($id);
        $pdf = PDF::loadView('website.reports.pages.Lifting.Examination.examination', compact('examination'));
        return $pdf->download($examination->report_number . '.pdf');
    }
}
