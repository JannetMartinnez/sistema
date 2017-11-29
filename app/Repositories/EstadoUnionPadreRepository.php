<?php

namespace App\Repositories;

use App\Models\EstadoUnionPadre;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstadoUnionPadreRepository
 * @package App\Repositories
 * @version November 29, 2017, 6:02 pm UTC
 *
 * @method EstadoUnionPadre findWithoutFail($id, $columns = ['*'])
 * @method EstadoUnionPadre find($id, $columns = ['*'])
 * @method EstadoUnionPadre first($columns = ['*'])
*/
class EstadoUnionPadreRepository extends BaseRepository
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
        return EstadoUnionPadre::class;
    }
}
