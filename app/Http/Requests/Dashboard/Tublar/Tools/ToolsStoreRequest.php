<?php

namespace App\Http\Requests\Dashboard\Tublar\Tools;

use Illuminate\Foundation\Http\FormRequest;

class ToolsStoreRequest extends FormRequest
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
            'order_id' => ['required'],
            'tools_status' => ['nullable'],
            'methods' => ['required'],
            'date' => ['required'],
            'fin_date' => ['required'],
            'work_order' => ['nullable'],
            'bsr' => ['nullable'],
            'summary' => ['nullable'],
            'procedure' => ['nullable'],
            'spec' => ['nullable'],
            'procedure' => ['nullable'],
            'accept' => ['required'],
            'desc' => ['required'],
            'type' => ['required'],
            'work_order' => ['nullable'],

        ];
    }
}
