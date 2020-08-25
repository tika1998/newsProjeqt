<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'avatar' => 'required|mimes:jpeg,jpg,png',
            'images' => 'required|array',
            'images.*' => 'mimes:jpeg,jpg,png'
        ];
    }
}
