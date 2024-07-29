<?php

namespace App\Http\Requests\Auth;

use App\Models\Dashboard\Company;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class FrontLoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'remember' => ['nullable'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        $credentials = $this->only('email', 'password');

        if (Company::where('email', $credentials['email'])->exists()) {
            if (Company::where('email', $credentials['email'])->value('password') === $credentials['password']) {

                $company = Company::where(['email' => $credentials['email'], 'password' => $credentials['password']])->first();
                if ($company->status == 'Active') {
                    // dd($company->id);
                    return redirect()->route('frontend.company', ['company' => $company]);
                } else {
                    return redirect()->back()->with(['email' => trans('auth.failed')]);
                }
            }
        } else {
            RateLimiter::hit($this->throttleKey());
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
    }

    public function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('email')) . '|' . $this->ip());
    }
}
