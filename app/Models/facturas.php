<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class facturas
 * @package App\Models
 * @version August 5, 2021, 5:35 pm UTC
 *
 * @property string $subtotal
 * @property string $isv
 * @property string $total
 * @property strin $fecha
 */
class facturas extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'facturas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'subtotal',
        'isv',
        'total',
        'fecha'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subtotal' => 'string',
        'isv' => 'string',
        'total' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subtotal' => 'numeric',
        'isv' => 'numeric',
        'total' => 'numeric',
        'fecha' => 'required'
    ];

    
}
