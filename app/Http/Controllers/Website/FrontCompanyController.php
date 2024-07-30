<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Company;

class FrontCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('welcome');
        // return view('website.company.view');
        return view('website.auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        dd($request);
        // if (!isset($request->company)) {
        //     return redirect('/login')->withErrors(['company' => 'The provided credentials do not match our records.']);
        // }
        $company = Company::where([
            'name' => $request->company,
            'status' => 'Active'
        ])->first();
        return view('website.company.view', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd('welcome');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('welcome');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd('welcome');
    }
}
