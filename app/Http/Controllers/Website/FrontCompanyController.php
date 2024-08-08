<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\ViewModels\Website\clientView\ReportsViewModel;
use Illuminate\Http\Request;

class FrontCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $company = auth()->guard('client')->user();
        return view('website.client.pages.home', ['company' => $company]);
    }
    // public function create(Request $request)
    // {
    //     dd($request->all());
    // }

    /**
     * Store a newly created resource in storage.
     */

    // public function store(Request $request)
    // {
    //     dd($request);
    // }

    /**
     * Display the specified resource.
     */

    public function show($type = null)
    {
        return view('website.client.pages.company', new ReportsViewModel($type));
        // dd('we');
    }


    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        dd($id);
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
