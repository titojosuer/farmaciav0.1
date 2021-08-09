<?php

namespace App\Repositories;

use App\Models\proveedores;
use App\Repositories\BaseRepository;

/**
 * Class proveedoresRepository
 * @package App\Repositories
 * @version August 5, 2021, 3:00 pm UTC
*/

class proveedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'telefono',
        'email'
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
        return proveedores::class;
    }
}
