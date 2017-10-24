<?php

namespace App\Repositories;

use App\Models\ConfigFechaInscripcion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConfigFechaInscripcionRepository
 * @package App\Repositories
 * @version October 24, 2017, 12:01 am UTC
 *
 * @method ConfigFechaInscripcion findWithoutFail($id, $columns = ['*'])
 * @method ConfigFechaInscripcion find($id, $columns = ['*'])
 * @method ConfigFechaInscripcion first($columns = ['*'])
*/
class ConfigFechaInscripcionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sol_asp_fi',
        'sol_asp__ff',
        'val_datos_fi',
        'val_datos_ff',
        'examen_ceneval',
        'fecha_resultados'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ConfigFechaInscripcion::class;
    }
}
