<?php

namespace App\Repositories;

use App\Models\EntidadFederativa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EntidadFederativaRepository
 * @package App\Repositories
 * @version October 4, 2017, 12:30 am UTC
 *
 * @method EntidadFederativa findWithoutFail($id, $columns = ['*'])
 * @method EntidadFederativa find($id, $columns = ['*'])
 * @method EntidadFederativa first($columns = ['*'])
*/
class EntidadFederativaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'clave_entidad',
        'nombre_entidad',
        'abreviatura',
        'pais_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EntidadFederativa::class;
    }
}
