<?php

namespace App\Http\Requests\Dashboard\Companies;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return [];
    }

    public function validationStore()
    {
        $request = Request();
        return Validator::make($request->all(), [
            'name' => 'required|unique:company',
            'full_name' => ['nullable'],
            'email' => 'required|email|unique:company',
            'password' => ['nullable'],
            'location' => ['nullable'],
            'status' => ['nullable'],
        ]);
    }
    public function validationUpdate()
    {
        $request = Request();
        return Validator::make($request->all(), [
            'name' => 'required',
            'full_name' => ['nullable'],
            'email' => 'required',
            'password' => ['required'],
            'location' => ['nullable'],
            'status' => ['nullable'],
        ]);
    }
}
