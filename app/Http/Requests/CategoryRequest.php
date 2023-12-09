<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules =  [
            'code' => ['required', 'string', 'max:25', 'unique:categories,code'],
            'title' => ['required', 'string', 'max:50', 'unique:categories,title'],
        ];

        if ($this->route()->named('categories.update')) {
            $rules['code'] = ['required', 'string', 'max:25', 'unique:categories,code,' . $this->category->id];
            $rules['title'] = ['required', 'string', 'max:50', 'unique:categories,title,' . $this->category->id];
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле должно быть заполнено',
            'max' => 'Не более 50 символов',
            'unique' => 'Поле должно быть уникально'
        ];
    }
}
