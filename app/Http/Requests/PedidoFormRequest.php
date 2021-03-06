<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Pedido;
use App\Models\DetallePedido;

class PedidoFormRequest extends FormRequest
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
            // 'id_proveedor'=>'required',
            // 'tipo_comprobante'=>'required|max:20',
            // 'serie_comprobante'=>'required|max:7',
            // 'num_comprobante'=>'required|max:10',
            // 'id_articulo'=>'required',
            'cantidad'=>'required',
            'precio'=>'required'
            // 'precio_venta'=>'required',
        ];
    }
}
