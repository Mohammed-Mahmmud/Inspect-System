<?php

namespace App\Http\Requests\Dashboard\Tublar\MudJar;

use Illuminate\Foundation\Http\FormRequest;

class MudJarUpdateRequest extends FormRequest
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
            'order_id'=> ['required'],
            'tool'=>  ['nullable'],
            'serial'=>  ['nullable'],
            'date'=>  ['required'],
            'inspect_procedure'=>  ['nullable'],
            'summary'=>  ['nullable'],
            'accept'=>  ['required'],
            'visual'=>  ['nullable'],
            'boroscopic'=>  ['nullable'],
            'dimensional'=>  ['nullable'],
            'mpi'=>  ['nullable'],
            'liquid_penetrant'=>  ['nullable'],
            'ultrasonic'=>  ['nullable'],
            'eddy_current'=>  ['nullable'],
            'content'=>  ['nullable'],
            'body_thread_cond'=>  ['nullable'],
            'type' =>  ['required'],
        ];
    }
}
