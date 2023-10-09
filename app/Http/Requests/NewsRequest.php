<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'subject' => ['required','min:2','max:256'],
            'content' => ['required','min:2'],
            'image' => ['required','image','mimes:png,jpg'],
            'categories_id' => ['required'],
            'sub_categories_id' => ['required'],
        ];
    }
}
