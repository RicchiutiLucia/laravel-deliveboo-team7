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
    public function messages()
    {
        return[

            'name.required' => 'Nome richiesto',
            'name.max' => 'Lunghezza massima del nome è di 200 caratteri',
            'price.required' => 'Prezzo richiesto',
            'price.decimal' => 'Il prezzo deve essere un numero',
            'description.max' => 'Lunghezza massima descrizione è di 2000 caratteri',
            'ingredients.max' => 'Lunghezza massima descrizione è di 2000 caratteri',
            'image.image' => 'L\'URL inserito non è valido',
            'image.max' => 'Lunghezza massima dell\'url è di 1024 caratteri',
            'visible.required' => 'La visibilità del piatto è richiesta'
    

        ];
    }
}
