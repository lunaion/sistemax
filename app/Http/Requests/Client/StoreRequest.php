<?php

namespace App\Http\Requests\Client;

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
            'name'      => 'string|required|max:255', 
            'dni'       => 'string|required|unique:clients|min:7|max:12', 
            'ruc'       => 'nullable|string|unique:clients|min:7|max:12', 
            'address'   => 'nullable|string|max:255', 
            'phone'     => 'string|nullable|unique:clients|min:7|max:10', 
            'email'     => 'string|nullable|unique:clients|max:255|email:rfc,dns',
        ];
    }

    public function message() {
        return[
            'name.string'       => 'El valor no es correcto.',
            'name.required'     => 'El campo es requerido.',
            'name.max'          => 'El valor máximo es de 255 caracteres.',

            'dni.string'        => 'El valor no es correcto.',
            'dni.required'      => 'El campo es requerido.',
            'dni.unique'        => 'El DNI ya se encuentra registrado',
            'dni.min'           => 'El valor mínimo es de 7 carácteres.',
            'dni.max'           => 'El valor máximo es de 12 carácteres.',

            'ruc.string'        => 'El valor no es correcto.',
            'ruc.unique'        => 'El RUC ya se encuentra registrado',
            'ruc.min'           => 'El valor mínimo es de 7 carácteres.',
            'ruc.max'           => 'El valor máximo es de 12 carácteres.',

            'address.string'    => 'El valor no es correcto.',
            'address.max'       => 'El valor máximo es de 255 caracteres.',

            'phone.string'      => 'El valor no es correcto.',
            'phone.unique'      => 'El telefono ya se encuentra registrado ',
            'phone.min'         => 'El valor mínimo es de 7 carácteres.',
            'phone.max'         => 'El valor máximo es de 10 carácteres.',

            'email.email'       => 'No es un email valido',

        ];
    }
}
