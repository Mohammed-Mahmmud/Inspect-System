<?php

namespace App\Http\Requests\Dashboard\Lifting\Examination;

use Illuminate\Foundation\Http\FormRequest;

class ExaminationUpdateRequest extends FormRequest {
    /**
    * Determine if the user is authorized to make this request.
    */

    public function authorize(): bool {
        return true;
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */

    public function rules(): array {
        return [
            'exam_date' => [ 'required' ],
            'identified_number' => [ 'nullable' ],
            'qty' => [ 'nullable' ],
            'manufature_date' => [ 'nullable' ],
            'swl' => [ 'nullable' ],
            'last_exam_date' => [ 'nullable' ],
            'original_cert_number' => [ 'nullable' ],
            'original_cert_date' => [ 'nullable' ],
            'cert_body_name' => [ 'nullable' ],
            'desc_header' => [ 'nullable' ],
            'desc_content' => [ 'nullable' ],
            'diameter' => [ 'nullable' ],
            'length' => [ 'nullable' ],
            'description' => [ 'nullable' ],
            'location' => [ 'nullable' ],
            'type' => [ 'nullable' ],
            'first_exam_after' => [ 'required' ],
            'has_equipment' => [ 'required' ],
            'carried_out' => [ 'required' ],
            'defect_note' => [ 'nullable' ],
            'accept' => [ 'nullable' ],
            'danger' => [ 'required' ],
            'danger_date' => [ 'nullable' ],
            'carried_exam' => [ 'nullable' ],
            'carried_note' => [ 'nullable' ],
            'safe_equipment' => [ 'required' ],
            'desc_type' => [ 'nullable' ],
            'perfect_note' => [ 'nullable' ],
            'desc_manufature' => [ 'nullable' ],
            'user_id' => [ 'nullable' ],
            'order_id' => [ 'required' ],
            'created_at' => [ 'nullable' ],
            'updated_at' => [ 'nullable' ],
            'diameter_unit' => [ 'nullable' ],
            'length_unit' => [ 'nullable' ],
            'shaklesize_id' => [ 'nullable' ],
            'thorough_type' => [ 'nullable' ],
            'checklist' => [ 'nullable' ],
            'checklist_type' => [ 'nullable' ],

        ];
    }
}
