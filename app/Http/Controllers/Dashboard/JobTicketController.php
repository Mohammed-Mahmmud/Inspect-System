<?php

namespace App\Http\Controllers\Dashboard;
use App\Actions\JobTicket\StoreJobTicketAction;
use App\Actions\JobTicket\UpdateJobTicketAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\JobTicket\JobTicketStoreRequest;
use App\Http\Requests\Dashboard\JobTicket\JobTicketUpdateRequest;
use App\Models\Dashboard\JobTicket;
use App\Models\Dashboard\JobTicketContent;
use App\Models\User;
use App\ViewModels\Dashboard\JobTicketView\JobTicketViewModel;
use Exception;
use PDF;

class JobTicketController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        try {

                $jobTickets = JobTicket::paginate( '15' );
            
            return view( 'dashboard.pages.jobTicket.view', compact( 'jobTickets' ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        try {
            return view( 'dashboard.pages.jobTicket.crud', new JobTicketViewModel() );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( JobTicketStoreRequest $request ) {
        try {
            app( StoreJobTicketAction::class )->handle( $request->validated() );
            return redirect()->route( 'jobTicket.index' );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        $jobTicket = JobTicket::findorfail( $id );
        $pdf = PDF::loadView( 'website.reports.pages.jobTicket.jobTicket', compact( 'jobTicket' ) );
        return $pdf->stream( 'JobTicket.pdf' );
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        try {
            $jobTicket = JobTicket::findorfail( $id );
            return view( 'dashboard.pages.jobTicket.crud', new JobTicketViewModel( $jobTicket ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( JobTicketUpdateRequest $request, $id ) {
        try {
            $jobTicket = JobTicket::findOrFail( $id );
            app( UpdateJobTicketAction::class )->handle( $jobTicket, $request->validated() );
            return redirect()->route( 'jobTicket.index' );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        try {
            JobTicketContent::where( 'job_ticket_id', $id )->delete();
            JobTicket::findorfail( $id )->delete();
            toastr( trans( 'Dashboard/toastr.destroy' ), 'error', trans( 'Dashboard/toastr.deleted' ) );
            return redirect()->route( 'jobTicket.index' );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    public function download( string $id ) {
        $jobTicket = JobTicket::findorfail( $id );
        $pdf = PDF::loadView( 'website.reports.pages.jobTicket.jobTicket', compact( 'jobTicket' ) );

        return $pdf->download( 'JobTicket.pdf' );
    }

}