<?php

namespace App\Repositories;

use App\Models\ConfigFechaInscripcion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConfigFechaInscripcionRepository
 * @package App\Repositories
 * @version December 16, 2017, 7:12 am UTC
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
        'sol_asp_ff',
        'val_datos_fi',
        'val_datos_ff',
        'examen_ceneval',
        'fecha_resultados',
        'periodo_entrada_id',
        'fecha_limite_pago',
        'cantidad_pagar',
        'tipo_modalidad_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ConfigFechaInscripcion::class;
    }
}
