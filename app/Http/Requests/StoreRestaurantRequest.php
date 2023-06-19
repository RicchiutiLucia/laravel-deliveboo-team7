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
            'name' => 'required',
            'slug' => 'nullable',
            'address' => 'required',
            'vat_number' => 'required',
            'user_id' => 'nullable|exists:users,id',
            'phone' => 'required',
            'description' => 'nullable',
        ];
    }
}
