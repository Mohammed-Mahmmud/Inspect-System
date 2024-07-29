<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\FrontLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class FrontLoginController extends Controller
{

    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('website.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(FrontLoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        // return redirect()->route('frontend.company',$id);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('client')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('frontend.login');
    }
}
