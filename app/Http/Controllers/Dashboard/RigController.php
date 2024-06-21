<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Rigs\StoreRigAction;
use App\Actions\Rigs\UpdateRigAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Rigs\RigRequest;
use App\Models\Dashboard\Company;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Rig;
use Exception;

class RigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        try {
            $rigs = Rig::orderBy('name', 'desc')->paginate('20');
            $companies = Company::get();
            return view('dashboard.pages.rigs.view', compact('rigs', 'companies'));
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
            return view('dashboard.pages.rigs.view');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RigRequest $request)
    {
        try {
            app(StoreRigAction::class)->handle($request->validationStore()->validated());
            return redirect()->route('rig.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $rig = Rig::FindOrFail($id);
            return view('dashboard.pages.rigs.view', compact('rig'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RigRequest $request, Rig $rig)
    {
        try {
            app(UpdateRigAction::class)->handle($rig, $request->validationUpdate()->validated());
            return redirect()->route('rig.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $order_id = Order::where('rig_id', $id)->pluck('id');
        if ($order_id->count() == 0) {
            try {
                Rig::FindOrFail($id)->delete();
                toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
                return back();
            } catch (Exception $e) {
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
        } else {
            toastr(trans('Dashboard/toastr.cannotRemove'), 'info', trans('Dashboard/toastr.undeleted'));
            return redirect()->route('rig.index');
        }
    }
}
