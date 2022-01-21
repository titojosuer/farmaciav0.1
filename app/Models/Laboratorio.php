<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
        'descripcion',
        'telefono',
        'direccion',
      ];
  
      public function productos(){
        return $this->hasMany(productos::class);
      }
}
