<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|string|max:200|unique|providers',
            'nit_number'    => 'required|string|max:10|min:7|unique|providers',
            'address'       => 'nullable|string|max:255', 
            'phone'         => 'required|string|max:10|min:7|unique|providers',
        ];
    }

    public function message() {
        return[
            'name.required'     => 'El campo es requerido.',
            'name.string'       => 'Solo se permite texto.',
            'name.max'          => 'El valor máximo es de 255 caracteres.',

            'email.required'    => 'El campo es requerido',
            'email.email'       => 'No es un correo electrónico válido',
            'email.string'      => 'El valor no es correcto.',
            'email.max'         => 'El valor máximo es de 255 caracteres.',
            'email.unique'      => 'Ya se encuentra resgistrado.',

            'nit_number.required'    => 'El campo es requerido',
            'nit_number.string'      => 'El valor no es correcto.',
            'nit_number.max'         => 'El valor máximo es de 10 caracteres.',
            'nit_number.min'         => 'El valor mínimo es de 7 caracteres.',
            'nit_number.unique'      => 'Ya se encuentra resgistrado.',

            'address.max'         => 'El valor máximo es de 255 caracteres.',
            'address.string'      => 'El valor no es correcto.',

            'phone.required'    => 'El campo es requerido',
            'phone.string'      => 'El valor no es correcto.',
            'phone.max'         => 'El valor máximo es de 10 caracteres.',
            'phone.min'         => 'El valor mínimo es de 7 caracteres.',
            'phone.unique'      => 'Ya se encuentra resgistrado.',

        ];
    }
}
