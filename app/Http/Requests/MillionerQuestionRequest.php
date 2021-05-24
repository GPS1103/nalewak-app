<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MillionerQuestionRequest extends FormRequest
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
            'question' => 'required|string|max:255',
            'anwser1' => 'required|string|max:255',
            'anwser2' => 'required|string|max:255',
            'anwser3' => 'required|string|max:255',
            'anwser4' => 'required|string|max:255',
        ];
    }
}
