<?php

namespace App\Http\Requests\Api\Employees;

use App\Http\Requests\Request;

class EmployeesPostRequest extends Request
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
            'company' => 'required',
            'last_name'=> 'required',
            'first_name'=> 'required',
            'email_address'=> 'required|email',
            'job_title'=> 'required',
            'business_phone'=> 'required',
            'home_phone'=> 'required',
            'mobile_phone'=> 'required',
            'fax_number'=> 'required',
            'address'=> 'required',
            'city'=> 'required',
            'state_province'=> 'required',
            'zip_postal_code'=> 'required',
            'country_region'=> 'required',
            'web_page'=> 'required',
            'notes'=> 'required',
            'attachments'=> 'required',
        ];
    }


}
