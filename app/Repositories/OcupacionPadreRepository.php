<?php

namespace App\Repositories;

use App\Models\OcupacionPadre;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OcupacionPadreRepository
 * @package App\Repositories
 * @version November 29, 2017, 5:54 pm UTC
 *
 * @method OcupacionPadre findWithoutFail($id, $columns = ['*'])
 * @method OcupacionPadre find($id, $columns = ['*'])
 * @method OcupacionPadre first($columns = ['*'])
*/
class OcupacionPadreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'desripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OcupacionPadre::class;
    }
}
