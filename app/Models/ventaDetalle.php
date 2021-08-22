<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventaDetalle extends Model
{
    use HasFactory;

    protected $fillable =[
      'venta_id',
      'producto_id',
      'cantidad',
      'precio',
      'descuento'
    ];

    public function producto(){
      return $this->belongsTo(productos::class);
    }
}
