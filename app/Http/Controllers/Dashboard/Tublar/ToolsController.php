<?php

namespace App\Http\Controllers\Dashboard\Tublar;

use App\Actions\Tublar\Tools\DeleteToolsAction;
use App\Actions\Tublar\Tools\StoreToolsAction;
use App\Actions\Tublar\Tools\UpdateToolsAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Tublar\Tools\ToolsStoreRequest;
use App\Http\Requests\Dashboard\Tublar\Tools\ToolsUpdateRequest;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\Tools\Tools;
use App\ViewModels\Dashboard\ToolsView\ToolsSearchModel;
use App\ViewModels\Dashboard\ToolsView\ToolsViewModel;
use Exception;
use Illuminate\Http\Request;
use PDF;

class ToolsController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index( Request $request ) {
        try {

            $tools = Tools::where( 'type', $request->type )->paginate( '20' )->withQueryString();
            $orders = Order::get();
            $type = $request->type;

            return view( 'dashboard.pages.tublar.tools.view', compact( 'tools', 'orders', 'type' ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create( Request $request ) {
        try {
            return view( 'dashboard.pages.tublar.tools.crud', new ToolsViewModel( $request->type ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( ToolsStoreRequest $request ) {
        try {
            app( StoreToolsAction::class )->handle( $request->validated() );
            return redirect()->route( 'tools.reports.create', [ 'type' => $request->type ] );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        try {
            $tools = Tools::findorfail( $id );
            $pdf = PDF::loadView( 'website.reports.pages.Tublar.Tools.tools', compact( 'tools' ) )->setPaper( 'a4', 'landscape' );
            return $pdf->stream( $tools->report_num.'.pdf' );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }
    public function repeat( string $id ) {
        try {
            $tools = Tools::findorfail( $id );
            return view( 'dashboard.pages.tublar.tools.crud', new ToolsViewModel( $tools->type, $tools ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        try {
            $tools = Tools::findorfail( $id );
            return view( 'dashboard.pages.tublar.tools.crud', new ToolsViewModel( $tools->type, $tools ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( ToolsUpdateRequest $request, string $id ) {
        try {
            $tools = Tools::findorfail( $id );
            app( UpdateToolsAction::class )->handle( $tools, $request->validated() );
            return redirect()->route( 'tools.reports.index', [ 'type' => $tools->type ] );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        try {
            $tools = Tools::findorfail( $id );
            app( DeleteToolsAction::class )->handle( $tools );
            return redirect()->route( 'tools.reports.index', [ 'type' => $tools->type ] );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    public function download( $id ) {
        try {
            $tools = Tools::findorfail( $id );
            $pdf = PDF::loadView( 'website.reports.pages.Tublar.Tools.tools', compact( 'tools' ) )->setPaper( 'a4', 'landscape' );
            return $pdf->download( $tools->report_num.'.pdf' );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    public function search( Request $request ) {
        try {
            return view( 'dashboard.pages.tublar.tools.view', new ToolsSearchModel( $request ) );
        } catch ( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

}