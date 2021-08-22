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
        'estado',
        'categoria_id',
        'proveedor_id'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'string|required|max:255',
        'precio' => 'required|',
      ];

    public function messages()
     {
       return [
         'nombre.required'=>'Este campo es requerido.',
         'nombre.string'=>'El valor no es correcto.',
         'nombre.max'=>'Solo se permite 255 caracteres.',

         'precio'=>'El precio es requerido',


      ];

    }
    public function proveedor(){
      return $this->belongsTo(proveedores::class);
    }

    public function categoria(){
      return $this->belongsTo(Categoria::class);
    }

}
