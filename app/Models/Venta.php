<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;


    protected $fillable =[
      'cliente_id',
      'fecha',
      'impuesto',
      'total',
      'estado',

    ];

    public function ventaDetalles(){
      return $this->hasMany(ventaDetalle::class);
    }

    public function cliente(){
      return $this->belongsTo(clientes::class);
    }
}
