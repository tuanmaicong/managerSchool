<?php

namespace App\Http\Requests;

use App\Models\Categories;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriesRequest extends FormRequest
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
        $tableName = (new Categories())->getTable();
        return [
            'name' => "required|string|max:50|unique:$tableName,name",
            'describe' => ['nullable','string','max:200']
        ];
    }
}
