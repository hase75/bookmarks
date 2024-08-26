<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluationRequest extends FormRequest
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
            'book_id' => 'required|exists:books,id',
            'evaluation' => 'required|integer',
            'word' => 'nullable|string|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'evaluation' => '評価',
            'word' => '口コミ',
        ];
    }
}
