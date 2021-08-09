<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class productos
 * @package App\Models
 * @version August 3, 2021, 9:19 pm UTC
 *
 * @property string $nombre
 * @property  $categoria
 * @property string $descripcion
 * @property string $proveedor
 * @property string $cantidad
 * @property string $precio
 * @property string $estado
 * @property string $fecha_expiracion
 */
class productos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'categoria',
        'descripcion',
        'proveedor',
        'cantidad',
        'precio',
        'estado',
        'fecha_expiracion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'proveedor' => 'string',
        'cantidad' => 'string',
        'precio' => 'string',
        'estado' => 'string',
        'fecha_expiracion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'categoria' => 'required',
        'descripcion' => 'required',
        'proveedor' => 'required',
        'cantidad' => 'required',
        'precio' => 'required',
        'estado' => 'required',
        'fecha_expiracion' => 'required'
    ];

    
}
