<?php

namespace App\Http\Controllers\Dashboard\Lifting;

use App\Actions\Lifting\ShakleSize\StoreShakleSizeAction;
use App\Actions\Lifting\ShakleSize\UpdateShakleSizeAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Lifting\ShakleSize\ShakleSizeStoreRequest;
use App\Http\Requests\Dashboard\Lifting\ShakleSize\ShakleSizeUpdateRequest;
use App\Models\Dashboard\Lifting\ShakleSize;
use Exception;

class ShakleSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        try {
            $shaklesizes  = ShakleSize::paginate(30);
            return view('dashboard.pages.lifting.ShakleSize.view', compact('shaklesizes'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return redirect()->route('examination.shaklesize.index');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(ShakleSizeStoreRequest $request)
    {
        try {
            app(StoreShakleSizeAction::class)->handle($request->validated());
            return redirect()->route('examination.shaklesize.index');
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
            $shaklesize = ShakleSize::findorfail($id);
            return view('dashboard.pages.lifting.ShakleSize.view', compact('shaklesize'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(ShakleSizeUpdateRequest $request, $id)
    {
        try {
            app(UpdateShakleSizeAction::class)->handle(ShakleSize::findOrFail($id), $request->validated());
            return redirect()->route('examination.shaklesize.index');
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
            ShakleSize::findorfail($id)->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
