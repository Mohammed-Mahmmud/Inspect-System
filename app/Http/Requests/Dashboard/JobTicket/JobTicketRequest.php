<?php

namespace App\Http\Requests\Dashboard\JobTicket;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class JobTicketRequest extends FormRequest
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
            "order_id" => ['required'],
            "work_number"    => ['nullable'],
            "address"        => ['nullable'],
            "ispr"           => ['nullable'],
            "start_date"     => ['nullable'],
            "end_date"       => ['nullable'],
            "well_name"      => ['nullable'],
            "ref_number"     => ['nullable'],
            "approval"       => ['nullable'],
            "job_price"      => ['nullable'],
            "content"        => ['nullable'],
            "user_id"        => ['required'],
        ]);
    }
    public function validationUpdate()
    {
        $request = Request();
        return Validator::make($request->all(), [
            "order_id" => ['required'],
            "work_number"    => ['nullable'],
            "address"        => ['nullable'],
            "ispr"           => ['nullable'],
            "start_date"     => ['nullable'],
            "end_date"       => ['nullable'],
            "well_name"      => ['nullable'],
            "ref_number"     => ['nullable'],
            "approval"       => ['nullable'],
            "job_price"      => ['nullable'],
            "content"        => ['nullable'],
            "user_id"        => ['required'],
        ]);
    }
}
