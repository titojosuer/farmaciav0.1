<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  protected $table='pedidos';

  protected $primaryKey='id';

  public $timestamps=false;


  protected $fillable =[
    'id_proveedor',
    'tipo_comprobante',
    'serie_comprobante',
    'num_comprobante',
    'impuesto',
    'total',
    'fecha',
    'estado',

  ];

  public function pedidoDetalles(){
    return $this->hasMany(DetallePedido::class);
  }

  public function proveedor(){
    return $this->belongsTo(proveedores::class);
  }

}
