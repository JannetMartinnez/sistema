<?php

namespace App\Repositories;

use App\Models\PreparatoriaProcedencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PreparatoriaProcedenciaRepository
 * @package App\Repositories
 * @version October 23, 2017, 5:10 pm UTC
 *
 * @method PreparatoriaProcedencia findWithoutFail($id, $columns = ['*'])
 * @method PreparatoriaProcedencia find($id, $columns = ['*'])
 * @method PreparatoriaProcedencia first($columns = ['*'])
*/
class PreparatoriaProcedenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'clave_preparatoria',
        'nombre_preparatoria',
        'entidades_federativas_id',
        'municipios_id',
        'colonia',
        'servicio',
        'sostenimiento'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PreparatoriaProcedencia::class;
    }
}
