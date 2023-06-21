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
            'image' => 'nullable|image|max:1024',
        ];
    }
    public function messages()
    {
        return[

            'name.required' => 'Nome richiesto',
            'name.max' => 'Lunghezza massima del nome è di 200 caratteri',
            'name.unique' => 'Il nome deve essere unico',
            'address.required' => 'L\'indirizzo richiesto',
            'address.max' => 'Lunghezza massima dell\'indirizzo è di 100 caratteri',
            'image.image' => 'L\'URL inserito non è valido',
            'image.max' => 'Lunghezza massima dell\'url è di 1024 caratteri',
            'vat_number.required' => 'La partita IVA è richiesta',
            'vat_number.integer' => 'La partita IVA è un numero',
            'vat_number.digits' => 'Lunghezza massima della partitia IVA è di 11 caratteri',
            'description.max' => 'Lunghezza massima della descizione è di 2000 caratteri',
            'phone.required' => 'Il numero di telefono è richiesto',
            'phone.min_digits' => 'Il numero di telefono deve essere di almeno 10 caratteri',
            'phone.max' => 'Il numero di telefono deve essere massimo di 15 caratteri',
            
            
            
           
    

        ];
    }
   
}
