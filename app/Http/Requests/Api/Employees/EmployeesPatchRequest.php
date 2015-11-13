<?php

namespace App\Http\Requests\Api\Employees;

use App\Http\Requests\Request;

class EmployeesPatchRequest extends Request
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
            'company' => '',
            'last_name'=> '',
            'first_name'=> '',
            'email_address'=> 'email',
            'job_title'=> '',
            'business_phone'=> '',
            'home_phone'=> '',
            'mobile_phone'=> '',
            'fax_number'=> '',
            'address'=> '',
            'city'=> '',
            'state_province'=> '',
            'zip_postal_code'=> '',
            'country_region'=> '',
            'web_page'=> '',
            'notes'=> '',
            'attachments'=> '',
        ];
    }
}
