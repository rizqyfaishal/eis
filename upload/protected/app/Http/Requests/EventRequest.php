<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EventRequest extends Request
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
            'title' => 'required|max:255',
            'event_location' => 'required|max:255',
            'event_date' => 'required|date',
            'thumbnail' => 'required|max:2048|mimes:jpg,jpeg,png',
            'body' => 'required'
        ];
    }
}
