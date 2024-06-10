<?php

namespace App\Http\Requests\Dashboard\Tublar\Tubs;

use Illuminate\Foundation\Http\FormRequest;

class TubsStoreRequest extends FormRequest
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
            'customer' => ['required'],
            'order' => ['nullable'],
            'date' => ['required'],
            'location' => ['nullable'],
            'order_id' => ['required'],
            'magnetizing' => ['required'],
            'magnetic_particles' => ['required'],
            'other_methods' => ['required'],
            'specification' => ['required'],
            'equipment' => ['required'],
            'tool_desc' => ['required'],
            'desc' => ['required'],
            'remarks' => ['nullable'],
            'supervisor' => ['nullable'],
            'type' => ['required'],
            'user_id' => ['required'],
            'conn_inspected' => ['nullable'],
            'pin_conn' => ['nullable'],
            'box_conn' => ['nullable'],
            'drill_pipe_details' => ['nullable'],
            'serial' => ['nullable'],
        ];
    }
}
