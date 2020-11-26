<?php

namespace App\Http\Requests\Employees;

use App\Abstracts\FormRequest;

class EmployeeCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|min:2|max:30',
            'last_name' => 'required|min:2|max:30',
            'company_id' => 'required|integer',
            'email' => 'nullable|email|min:5|max:191',
            'phone' => 'nullable|min:5|max:20'
        ];
    }
}
