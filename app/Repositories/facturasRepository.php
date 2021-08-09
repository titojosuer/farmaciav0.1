<?php

namespace App\Repositories;

use App\Models\facturas;
use App\Repositories\BaseRepository;

/**
 * Class facturasRepository
 * @package App\Repositories
 * @version August 5, 2021, 5:35 pm UTC
*/

class facturasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subtotal',
        'isv',
        'total',
        'fecha'
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
        return facturas::class;
    }
}
