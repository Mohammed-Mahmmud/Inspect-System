<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Companies\StoreCompanyAction;
use App\Actions\Companies\UpdateCompanyAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Companies\CompanyRequest;
use App\Models\Dashboard\Company;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Rig;
use Exception;

class CompanyController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:companies', ['only' => ['index', 'store']]);
        $this->middleware('permission:create companies', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit companies', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete companies', ['only' => ['destroy']]);
    }
    public function index()
    {
        try {
            $companies = Company::orderBy('id', 'desc')->paginate(15);
            return view('dashboard.pages.companies.view', compact('companies'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function create()
    {
        try {
            return view('dashboard.pages.company.view');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function store(CompanyRequest $request)
    {
        try {
            app(StoreCompanyAction::class)->handle($request->validationStore()->validated());
            return redirect()->route('company.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $company = Company::FindOrFail($id);
            return view('dashboard.pages.companies.view', compact('company'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, string $id)
    {
        try {
            $company = Company::FindOrFail($id);
            app(UpdateCompanyAction::class)->handle($company, $request->validationUpdate()->validated());
            return redirect()->route('company.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $order_id = Order::where('company_id', $id)->pluck('id');
        $rig_id = Rig::where('company_id', $id)->pluck('id');

        if ($order_id->count() == 0 && $rig_id->count() == 0) {

            try {
                Company::FindOrFail($id)->delete();
                toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
                return back();
            } catch (Exception $e) {
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
        } else {
            toastr(trans('Dashboard/toastr.cannotRemove'), 'info', trans('Dashboard/toastr.undeleted'));
            return redirect()->route('company.index');
        }
    }
}
