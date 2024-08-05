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
        return view('website.company.view', ['company' => $company]);
    }
}
