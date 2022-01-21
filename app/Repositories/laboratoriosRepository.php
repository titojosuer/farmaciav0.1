<?php

namespace App\Repositories;

use App\Models\Laboratorio;
use App\Repositories\BaseRepository;

/**
 * Class clientesRepository
 * @package App\Repositories
 * @version August 3, 2021, 8:56 pm UTC
*/

class laboratoriosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'direccion',
        'telefono'
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
        return Laboratorio::class;
    }
}
