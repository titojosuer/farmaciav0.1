<?php

namespace App\Repositories;

use App\Models\productos;
use App\Repositories\BaseRepository;

/**
 * Class productosRepository
 * @package App\Repositories
 * @version August 3, 2021, 9:19 pm UTC
*/

class productosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return productos::class;
    }
}
