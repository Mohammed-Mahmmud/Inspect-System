<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class FrontCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = auth()->guard('client')->user();
        return view('website.company.pages.company', ['company' => $company]);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store()
    {
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
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update()
    {
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
    }
}
