<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'code' => ['required', 'string', 'max:50', 'unique:products,code'],
            'title' => ['required', 'string', 'max:50', 'unique:products,title'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png'],
            'description' => ['nullable', 'string', 'max:500'],
            'weight' => ['required', 'numeric', 'gt:0', 'lte:9999.99'],
            'price' => ['required', 'numeric', 'gt:0', 'lte:9999.99'],
        ];

        if ($this->route()->named('products.update')) {
            $rules['code'] = ['required', 'string', 'max:50', 'unique:products,code,' . $this->product->id];
            $rules['title'] = ['required', 'string', 'max:50', 'unique:products,title,' . $this->product->id];
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле должно быть заполнено',
            'max' => 'Не более 50 символов',
            'unique' => 'Поле должно быть уникально',
            'mimes' => 'Неподдерживаемый формат изображения',
            'description.max' => 'Не более 500 символов',
            'numeric' => 'Введите число',
            'gt' => 'Число должно быть больше 0',
            'lte' => 'Число должно быть меньше или равно 9999.99'
        ];
    }
}
