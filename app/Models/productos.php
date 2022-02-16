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
        'codigo',
        'nombre',
        'stock',
        'imagen',
        'precio',
        'impuesto',
        'descuento',
        'estado',
        'categoria_id',
        'proveedor_id',
        'laboratorio_id',
        'principio_activo'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'string|required|max:255',
        'precio' => 'required|',
        'impuesto' => 'required|',
        'descuento' => 'required|',
        'stock' => 'required|',
        'proveedor_id' => 'required|integer',
        'categoria_id' => 'required|integer',
        'laboratorio_id' => 'required|integer',
        'principio_activo'=> 'required|string',
      ];

    public function proveedor(){
      return $this->belongsTo(proveedores::class);
    }

    public function categoria(){
      return $this->belongsTo(Categoria::class);
    }

    public function laboratorio(){
      return $this->belongsTo(Laboratorio::class);
    }

}
