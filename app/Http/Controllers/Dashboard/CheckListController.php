<?php

namespace App\Http\Controllers\Dashboard;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dashboard\CheckList;
use App\Actions\CheckLists\StoreCheckListAction;
use App\Actions\CheckLists\UpdateCheckListAction;
use App\Http\Requests\Dashboard\CheckLists\CheckListStoreRequest;
use App\Http\Requests\Dashboard\CheckLists\CheckListUpdateRequest;

class CheckListController extends Controller {

    public function index() {
        try {
            dd( 'welcome' );
            $checklist = CheckList::paginate( '20' );
            return view( 'dashboard.pages.CheckList.view', compact( 'checklist' ) );

        } catch( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }

    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( CheckListStoreRequest $request ) {
        try {
            app( StoreCheckListAction::class )->handle( $request->validated() );
            return redirect()->route( 'report_type.index' );
        } catch( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( CheckListUpdateRequest $request, $id ) {

        try {
            $report_type = CheckList::findorfail( $id );
            app( UpdateCheckListAction::class )->handle( $report_type, $request->validated() );
            return redirect()->route( 'report_type.index' );
        } catch( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        try {
            CheckList::findorfail( $id )->delete();
            toastr( trans( 'Dashboard/toastr.destroy' ), 'error', trans( 'Dashboard/toastr.deleted' ) );
            return back();
        } catch( Exception $e ) {
            return redirect()->back()->withErrors( [ 'error' => $e->getMessage() ] );
        }
    }
}