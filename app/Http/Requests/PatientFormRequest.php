<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'identification_type_id' => '',
            'identification' => '',
            'name1' => '',
            'name2' => '',
            'last_name1' => '',
            'last_name2' => '',
            'birthdate' => '',
            'email' => ''
        ];
    }
}
