<?php

namespace App\Http\Requests\Companies;

use App\Abstracts\FormRequest;

class CompanyCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:191',
            'email' => 'nullable|email|min:5|max:191',
            'website' => 'nullable|min:5|max:191',
            'logo' => 'bail|nullable|image|dimensions:min_width=100,min_height=100'
        ];
    }
}
