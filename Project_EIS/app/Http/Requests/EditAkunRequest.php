<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditAkunRequest extends Request
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
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|max:255',
            'address1' => 'required|min:6',
            'address2' => 'required|min:6',
            'city' => 'required|min:3',
            'postal_code' => 'required',
            'description' => 'required|max:1000'
        ];
    }
}
