<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class proveedores
 * @package App\Models
 * @version August 5, 2021, 3:00 pm UTC
 *
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 */
class proveedores extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'proveedores';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'email' => 'email'
    ];
    
    public function productos(){
      return $this->hasMany(productos::class);
    }

}
