<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            'name' => ['required', 'unique:restaurants,name', 'max:200'],
            'slug' => 'nullable',
            'address' => ['required', 'max:100'],
            'vat_number' => ['required', 'integer', 'digits:11'],
            'user_id' => ['nullable|exists:users,id'],
            'phone' => ['required', 'min_digits:10' , 'max:15'],
            'description' => ['nullable', 'max:2000'],
        ];
    }
}
