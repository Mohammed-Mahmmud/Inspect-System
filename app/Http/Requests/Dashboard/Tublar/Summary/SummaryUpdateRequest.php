<?php

namespace App\Http\Requests\Dashboard\Tublar\Summary;

use Illuminate\Foundation\Http\FormRequest;

class SummaryUpdateRequest extends FormRequest
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
            'order_id'=>[ 'required' ],
            'st_date'=>[ 'required' ],
            'fin_date'=>[ 'required' ],
            'contract_num'=>[ 'nullable' ],
            'work_order'=>[ 'nullable' ],
            'sheets'=>[ 'nullable' ],
            'comments'=>[ 'nullable' ],
            'type'=>[ 'required' ],
            'details'=>[ 'required' ],
            'description'=>[ 'required' ],
            'colour_code'=>[ 'required' ],
        ];
    }
}
