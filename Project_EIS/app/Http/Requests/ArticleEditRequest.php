<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleEditRequest extends Request
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
            'snippet' => 'required|max:450',
            'thumbnail' => 'max:2048|mimes:jpg,jpeg,png',
            'body' => 'required'
        ];
    }
}
