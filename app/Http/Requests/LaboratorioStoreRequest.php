<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaboratorioStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
      return [
          'nombre'=>'required|string|max:50',
          'descripcion'=>'nullable|string|max:250',
          'telefono'=>'nullable|string|max:9',
          'direccion'=>'nullable|string|max:250'
      ];
  }

  public function messages()
  {
    return [
          'nombre.required'=>'Este campo es requerido',
          'nombre.string'=>'El valor no es correcto',
          'nombre.max'=>'Solo se permite 50 caracteres',
          'descripcion.string'=>'El valor no es correcto',
          'descripcion.max'=>'Solo se permite 250  caracteres',
          'direccion.string'=>'El valor no es correcto',
          'direccion.max'=>'Solo se permite 250  caracteres',
          'telefono.string'=>'El valor no es correcto',
          'telefono.max'=>'Solo se permite 9  numeros'
    ];
  }
}
