<?php

namespace App\Http\Requests\Dashboard\Lifting\Mpi;

use Illuminate\Foundation\Http\FormRequest;

class MpiStoreRequest extends FormRequest {
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
            // 'name' => [ 'required' ],
            'date' => [ 'required' ],
            'order_id' => [ 'required' ],
            'user_id' => [ 'required' ],
            'acceptance' => [ 'required' ],
            'result' => [ 'nullable' ],
            'customer_work_number' => [ 'nullable' ],
            'location' => [ 'nullable' ],
            'specification' => [ 'nullable' ],
            'manufacture' => [ 'nullable' ],
            'type' => [ 'nullable' ],
            'extent' => [ 'nullable' ],
            'description' => [ 'nullable' ],
            'serial' => [ 'nullable' ],
            'first_label' => [ 'nullable' ],
            'first_content' => [ 'nullable' ],
            'next_date' => [ 'nullable' ],
            'image' => [ 'nullable' ],
            'supervisor' =>[ 'nullable' ],
            'purchase_order_no' =>[ 'nullable' ],
            'note' =>[ 'nullable' ],
            'magnetizing_current' =>[ 'nullable' ],
            'magnetic_particles' =>[ 'nullable' ],
            'surface_condition' =>[ 'nullable' ],
            'equipment'   =>[ 'required' ],

        ];
    }

    public function messages() {
        return [
            'equipment'       => trans( 'Dashboard/lifting/mpi.requiredEquipment' ),
            'date'       => trans( 'Dashboard/lifting/mpi.requiredDate' ),
            'order_id' => trans( 'Dashboard/lifting/mpi.requiredOrder' ),

        ];
    }
}