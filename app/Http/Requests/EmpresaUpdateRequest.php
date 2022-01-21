<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaUpdateRequest extends FormRequest
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
          'nombre'=>'string|required',
          'descripcion'=>'string|required',
          'logo'=>'string|required',
          'correo'=>'email|string|required',
          'telefono'=>'integer|required',
          'direccion'=>'string|required',
      ];
    }

    public function messages()
    {
      return[
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',

            'descripcion.required'=>'Este campo es requerido',
            'descripcion.string'=>'El valor no es correcto',

            'logo.required'=>'Este campo es requerido',
            'logo.string'=>'El valor no es correcto',

            'correo.required'=>'Este campo es requerido',
            'correo.email'=>'El email no es valido',

            'direccion.required'=>'Este campo es requerido',
            'direccion.email'=>'El email no es valido',


            'telefono.required'=>'Este campo es requerido',
            'telefono.email'=>'El email no es valido',
          ];

}
}
