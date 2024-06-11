<?php

namespace App\Http\Requests\Dashboard\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        return [
            'name' => ['required'],
            'full_name' => ['nullable'],
            'email' => ['required'],
            'password' => ['required'],
            'status' => ['nullable'],
            'roles' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'name.reuired' => trans('Dashboard/validation.required'),
            'email.required' => trans('Dashboard/validation.required'),
            'password.required' => trans('Dashboard/validation.required'),
        ];
    }
}
