<?php

namespace App\Http\Requests\City;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'          => 'required|string|max:50',
            'description'   => 'nullable|string|max:255',
        ];
    }

    public function message() {
        return[
            'name.required'         => 'El campo es requerido.',
            'name.string'           => 'Solo se permite texto.',
            'name.max'              => 'El valor máximo es de 50 caracteres.',
            'description.string'    => 'Solo se permite texto.',
            'description.max'       => 'El valor máximo es de 255 caracteres.',
        ];
    }
}
