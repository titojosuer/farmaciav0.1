<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  protected $table='pedidos';

  protected $primaryKey='id_pedido';

  public $timestamps=false;


  protected $fillable =[
    'id_pedido',
    'id_proveedor',
    'tipo_comprobante',
    'serie_comprobante',
    'num_comprobante',
    'fecha_hora',
    'impuesto',
    'estado',

  ];

  protected $guarded =[

  ];
}
