<?php

namespace App\Http\Controllers\Dashboard\Tublar;

use App\Actions\Tublar\Summary\StoreSummaryAction;
use App\Actions\Tublar\Summary\UpdateSummaryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Tublar\Summary\SummaryStoreRequest;
use App\Http\Requests\Dashboard\Tublar\Summary\SummaryUpdateRequest;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\TublarSummary\TublarSummary;
use App\ViewModels\Dashboard\TublarSummary\SummarySearchModel;
use App\ViewModels\Dashboard\TublarSummary\SummaryViewModel;
use Exception;
use Illuminate\Http\Request;
use PDF;
class TublarSummaryController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index( Request $request ) {
        try {

                $summary = TublarSummary::where( 'type', $request->type )->paginate( '20' )->withQueryString();
            
            $orders = Order::get();
            $type = $request->type;
            return view( 'dashboard.pages.tublar.summary.view', compact( 'summary', 'orders', 'type' ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create( Request $request ) {
        try {
            return view( 'dashboard.pages.tublar.summary.crud', new SummaryViewModel( $request->type ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( SummaryStoreRequest $request ) {
        try {
            app( StoreSummaryAction::class )->handle( $request->validated() );
            return redirect()->route( 'tools-summary.create', [ 'type' => $request->type ] );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        try {
            $summary = TublarSummary::findorfail( $id );
            $pdf = PDF::loadView( 'website.reports.pages.Tublar.Summary.', compact( 'summary' ) )->setPaper( 'a4', 'landscape' );
            return $pdf->stream( $summary->report_num.'.pdf' );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        try {
            $summary = TublarSummary::findorfail( $id );
            return view( 'dashboard.pages.tublar.summary.crud', new SummaryViewModel( $summary->type, $summary ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( SummaryUpdateRequest $request, string $id ) {
        try {
            $summary = TublarSummary::findorfail( $id );
            app( UpdateSummaryAction::class )->handle( $summary, $request->validated() );
            return redirect()->route( 'tools-summary.index', [ 'type' => $request->type ] );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        try {
            $summary = TublarSummary::findorfail( $id );
            $summary->delete();
            return redirect()->route( 'tools-summary.index', [ 'type' => $summary->type ] );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }
    public function download( $id ) {
        try {
            $summary = TublarSummary::findorfail( $id );
            $pdf = PDF::loadView( 'website.reports.pages.Tublar.Summary.', compact( 'summary' ) )->setPaper( 'a4', 'landscape' );
            return $pdf->download( $summary->report_num.'.pdf' );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    public function search( Request $request ) {
        try {
            return view( 'dashboard.pages.tublar.summary.view', new SummarySearchModel( $request ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }
}