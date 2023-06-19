<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
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
        'price' => 'required',
        'slug' => 'nullable',
        'ingredients' => 'nullable',
        'description' => 'nullable',
        'image' => 'nullable|image|max:1024',
        'restaurant_id' => 'nullable|exists:restaurants,id',
        'visible' => 'required'

        ];



    }
}
