<?php

namespace App\Http\Requests\Dashboard\ReportSetting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class SettingsRequest extends FormRequest
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
            'key' => ['required'],
            'value' => ['nullable'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png'],
        ]);
    }
    public function validationUpdate()
    {
        $request = Request();
        return Validator::make($request->all(), [
            'key' => ['required'],
            'value' => ['nullable'],
            'image' => 'nullable', 'mimes:jpg,jpeg,png',
        ]);
    }
}
