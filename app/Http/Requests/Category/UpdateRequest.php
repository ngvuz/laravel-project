<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:category,name,'.request()->id,
        ];
    }
    public function message(): array
    {
        return [
            'name.required' => 'Tên danh mục không được để trống',
            'name.unique' => 'Danh mục này đã có trong csdl',
        ];
    }
}
