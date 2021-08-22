<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
  protected $table='detalle_pedido';

  protected $primaryKey='id';

  public $timestamps=false;


  protected $fillable =[
    // 'id_detalle_pedido',
    'id_pedido',
    'id_producto',
    'cantidad',
    'precio',
  ];

  public function pedido(){
    return $this->belongsTo(Pedidos::class);
  }

    public function producto(){
      return $this->belongsTo(productos::class);
    }
}
