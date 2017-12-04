<?php

namespace App\Repositories;

use App\Models\ocupacion_padres;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ocupacion_padresRepository
 * @package App\Repositories
 * @version November 23, 2017, 7:15 pm UTC
 *
 * @method ocupacion_padres findWithoutFail($id, $columns = ['*'])
 * @method ocupacion_padres find($id, $columns = ['*'])
 * @method ocupacion_padres first($columns = ['*'])
*/
class ocupacion_padresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'PRIMARY'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ocupacion_padres::class;
    }
}
