<?php

namespace App\Http\Requests\Product;

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
            'name'          => 'string|required|unique:products,name,'.$this->route('product')->id.'|max:255',
            'image'         => 'required|dimensions:min_width=100,min_height=200',
            'sell_price'    => 'required',
            'category_id'   => 'integer|required|exists:App\Category,id',
            'provider_id'   => 'integer|required|exists:App\Provider,id',
        ];
    }

    public function message() {
        return[
            'name.string'           => 'El valor no es correcto.',
            'name.required'         => 'El campo es requerido.',
            'name.unique'           => 'El producto ya está registrado.',
            'name.max'              => 'El valor máximo es de 255 caracteres.',

            'image.required'        => 'El campo es requerido.',
            'image.dimensions'      => 'Solo se permite imagenes de 100x200 px.',

            'category_id.integer'   => 'Solo se permiten valores enteros.',
            'category_id.required'  => 'El campo es requerido.',
            'category_id.exists'    => 'La categoría no existe.',

            'provider_id.integer'   => 'Solo se permiten valores enteros.',
            'provider_id.required'  => 'El campo es requerido.',
            'provider_id.exists'    => 'El proveedor no existe.',
        ];
    }
}
