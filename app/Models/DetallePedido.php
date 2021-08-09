<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
  protected $table='detalle_pedido';

  protected $primaryKey='id_detalle_pedido';

  public $timestamps=false;


  protected $fillable =[
    'id_detalle_pedido',
    'id_pedido',
    'id_articulo',
    'cantidad',
    'precio_compra',
    'precio_venta',
  ];

  protected $guarded =[

  ];
}
