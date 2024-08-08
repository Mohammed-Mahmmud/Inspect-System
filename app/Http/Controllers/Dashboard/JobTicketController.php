<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\JobTicket\StoreJobTicketAction;
use App\Actions\JobTicket\UpdateJobTicketAction;
use App\Helper\ReportsTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\JobTicket\JobTicketRequest;
use App\Models\Dashboard\JobTicket;
use App\ViewModels\Dashboard\JobTicketView\JobTicketViewModel;
use Exception;
use Illuminate\Support\Facades\Auth;
use PDF;

class JobTicketController extends Controller
{
    use ReportsTrait;
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        try {
            if (Auth::user()->can('editor')) {
                $jobTickets = JobTicket::orderBy('id', 'desc')->get();
            } else {
                $jobTickets = JobTicket::orderBy('id', 'desc')->where('user_id', Auth::user()->id)->get();
            }
            return view('dashboard.pages.jobTicket.view', compact('jobTickets'));
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
            return view('dashboard.pages.jobTicket.crud', new JobTicketViewModel());
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(JobTicketRequest $request)
    {
        try {
            app(StoreJobTicketAction::class)->handle($request->validationStore()->validated());
            return redirect()->route('jobTicket.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $data = JobTicket::FindOrFail($id);
        $pdf = PDF::loadView($data::PDFVIEW, compact('data'));
        return $pdf->stream('JobTicket.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        try {
            $jobTicket = JobTicket::FindOrFail($id);
            $this->reportAuthChecker($jobTicket->user_id);
            return view('dashboard.pages.jobTicket.crud', new JobTicketViewModel($jobTicket));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(JobTicketRequest $request, $id)
    {
        try {
            $jobTicket = JobTicket::FindOrFail($id);
            app(UpdateJobTicketAction::class)->handle($jobTicket, $request->validationUpdate()->validated());
            return redirect()->route('jobTicket.index');
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
            JobTicket::FindOrFail($id)->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return redirect()->route('jobTicket.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function download(string $id)
    {
        $data = JobTicket::FindOrFail($id);
        $pdf = PDF::loadView($data::PDFVIEW, compact('data'));

        return $pdf->download('JobTicket.pdf');
    }
}
