<?php

namespace App\Repositories;

use App\Models\EstadoCivil;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstadoCivilRepository
 * @package App\Repositories
 * @version December 7, 2017, 3:21 pm UTC
 *
 * @method EstadoCivil findWithoutFail($id, $columns = ['*'])
 * @method EstadoCivil find($id, $columns = ['*'])
 * @method EstadoCivil first($columns = ['*'])
*/
class EstadoCivilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EstadoCivil::class;
    }
}
