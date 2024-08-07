<?php

namespace App\Http\Requests\Dashboard\Tublar\Tubs;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class SummaryRequest extends FormRequest
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
            //
        ];
    }
    public function summaryStore()
    {
        return Validator::make(Request()->all(), []);
    }
    public function summaryUpdate()
    {
        return Validator::make(Request()->all(), []);
    }
}
