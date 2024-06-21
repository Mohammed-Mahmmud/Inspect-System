<?php

namespace App\Http\Controllers\Report;

use App\Actions\ReportSettings\StoreSettingsAction;
use App\Actions\ReportSettings\UpdateSettingsAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ReportSetting\SettingsRequest;
use App\Models\Report\ReportSettings;
use Exception;

class Settings extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        try {
            $settings = ReportSettings::orderBy('id', 'desc')->paginate('20');
            return view('dashboard.pages.settings.view', compact('settings'));
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
            return view('dashboard.pages.settings.view');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SettingsRequest $request)
    {
        try {
            app(StoreSettingsAction::class)->handle($request->validationStore()->validated());
            return redirect()->route('report_settings.index');
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
            $settings = ReportSettings::FindOrFail($id);
            return view('dashboard.pages.settings.view', compact('settings'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingsRequest $request, $id)
    {
        try {
            $reportSettings = ReportSettings::FindOrFail($id);
            app(UpdateSettingsAction::class)->handle($reportSettings, $request->validationUpdate()->validated());
            return redirect()->route('report_settings.index');
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
            ReportSettings::FindOrFail($id)->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
