<?php

namespace App\Repositories;

use App\Models\TipoModalidad;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoModalidadRepository
 * @package App\Repositories
 * @version December 16, 2017, 5:13 am UTC
 *
 * @method TipoModalidad findWithoutFail($id, $columns = ['*'])
 * @method TipoModalidad find($id, $columns = ['*'])
 * @method TipoModalidad first($columns = ['*'])
*/
class TipoModalidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'modalidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoModalidad::class;
    }
}
