<?php

namespace App\Http\Requests;

use App\Models\Categories;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoriesUpdateRequest extends FormRequest
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
        //lấy ra id của đt cập nhật
        $id = request()->segment('3');
        return [
            'name' => ['required', 'min:3', 'max:20', Rule::unique($tableName)->ignore($id)],
            'describe' => 'nullable|max:250',
        ];
    }
}
