<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|max:20',
            'image' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|integer|digits_between:1,10',
            'outline' => 'required|max:40',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'image' => '画像',
            'price' => '値段',
            'outline' => '概要',
        ];
    }
}
