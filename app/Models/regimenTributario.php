<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regimenTributario extends Model
{
    use HasFactory;

    protected $fillable =[
      'cai',
      'correlativo_inicial',
      'correlativo_final',
      'ultimo_correlativo',
      'fecha_vencimiento',
      'numero_relativo',
    ];
}
