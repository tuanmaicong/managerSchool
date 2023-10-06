<?php

namespace App\Http\Requests;

use App\Models\Teachers;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeachersFormRequest extends FormRequest
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
        $tableName = (new Teachers())->getTable();
        return [
            'name' => ['required','max:256',Rule::unique($tableName)],
            'email' => ['required','email',Rule::unique($tableName)],
            'password' => ['required','min:8','max:24'],
            'birthday' => ['nullable'],
            'address' => ['nullable'],
            'subjects_id' => "required",
        ];
    }
}
