<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class regimenTributarioStoreRequest extends FormRequest
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
          'cai'=>'string|required|max:37',
          'correlativo_final'=>'integer|required',
          'correlativo_inicial'=>'integer|required',
          'ultimo_correlativo'=>'integer|required',
          'fecha_vencimiento'=>'date|required',
          'numero_relativo'=>'integer|required',
      ];
    }

    public function messages()
    {
      return[
            'cai.required'=>'Este campo es requerido',
            'cai.string'=>'El valor no es correcto',
            'cai.max'=>'Solo se permite 37 caracteres',

            'correlativo_final.required'=>'Este campo es requerido',
            'correlativo_final.integer'=>'El valor no es correcto, utilize solo numeros',


            'correlativo_inicial.required'=>'Este campo es requerido',
            'correlativo_inicial.integer'=>'El valor no es correcto, utilize solo numeros',


            'numero_relativo.required'=>'Este campo es requerido',
            'numero_relativo.integer'=>'El valor no es correcto, utilize solo numeros',


            'ultimo_correlativo.required'=>'Este campo es requerido',
            'ultimo_correlativo.integer'=>'El valor no es correcto, utilize solo numeros',


            'fecha_vencimiento.required'=>'Este campo es requerido',
              'fecha_vencimiento.date'=>'Este campo es debe ser de tipo fecha',

      ];
    }
}
