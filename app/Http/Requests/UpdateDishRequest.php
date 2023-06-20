<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDishRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:200'],
            'price' => ['required', 'decimal:2'],
            'slug' => 'nullable',
            'ingredients' => ['nullable', 'max:400'],
            'description' => ['nullable', 'max:2000'],
            'image' => 'nullable|image|max:1024',
            'visible' => ['nullable', 'boolean']
        ];
    }
}
