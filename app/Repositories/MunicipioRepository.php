<?php

namespace App\Repositories;

use App\Models\Municipio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MunicipioRepository
 * @package App\Repositories
 * @version October 12, 2017, 11:04 pm UTC
 *
 * @method Municipio findWithoutFail($id, $columns = ['*'])
 * @method Municipio find($id, $columns = ['*'])
 * @method Municipio first($columns = ['*'])
*/
class MunicipioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_municipio',
        'clave_entidad',
        'entidades_federativas_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Municipio::class;
    }
}
