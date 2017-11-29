<?php

namespace App\Repositories;

use App\Models\EstudioPadre;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstudioPadreRepository
 * @package App\Repositories
 * @version November 29, 2017, 6:04 pm UTC
 *
 * @method EstudioPadre findWithoutFail($id, $columns = ['*'])
 * @method EstudioPadre find($id, $columns = ['*'])
 * @method EstudioPadre first($columns = ['*'])
*/
class EstudioPadreRepository extends BaseRepository
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
        return EstudioPadre::class;
    }
}
