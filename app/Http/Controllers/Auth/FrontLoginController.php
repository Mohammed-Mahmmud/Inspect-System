<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\FrontLoginRequest;
use App\Models\Dashboard\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FrontLoginController extends Controller
{
    protected $redirectTo = '/';
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
        // // $request->authenticate();
        // $company = Company::where([
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'status' => 'Active'
        // ])->first();
        // $request->session()->regenerate();
        // if (!is_null($company)) {
        //     return redirect()->route('frontend.company', ['company' => $company->name]);
        // } else {
        //     return redirect('/login')->withErrors(['email' => 'The provided credentials do not match our records.']);
        // }
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'Active'], $request->remember)) {
            dd('company');
            return redirect()->intended(route('frontend.company'));
        }

        return back()->withInput($request->only('email', 'remember'));
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
