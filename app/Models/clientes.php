<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class clientes
 * @package App\Models
 * @version August 3, 2021, 8:56 pm UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property string $dni
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 */
class clientes extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'apellido',
        'dni',
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
        'apellido' => 'string',
        'dni' => 'string',
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
        'apellido' => 'required',
        'dni' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'email' => 'email'
    ];

    
}
