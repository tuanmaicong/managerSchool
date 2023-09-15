<?php

namespace App\Http\Requests;

use App\Models\SubCategory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubCategoryRequest extends FormRequest
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
        $tabaleName = (new SubCategory())->getTable();
        return [
            'name' => ['required','string','min:2','max:256',Rule::unique($tabaleName)],
            'categories_id' => ['required'],
        ];
    }
}
