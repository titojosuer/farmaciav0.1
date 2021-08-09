<?php

namespace App\Repositories;

use App\Models\tipo_usuarios;
use App\Repositories\BaseRepository;

/**
 * Class tipo_usuariosRepository
 * @package App\Repositories
 * @version August 5, 2021, 3:20 pm UTC
*/

class tipo_usuariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return tipo_usuarios::class;
    }
}
