<?php

namespace App\Repositories;

use App\Models\PeriodoEscolar;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PeriodoEscolarRepository
 * @package App\Repositories
 * @version January 10, 2018, 8:50 pm UTC
 *
 * @method PeriodoEscolar findWithoutFail($id, $columns = ['*'])
 * @method PeriodoEscolar find($id, $columns = ['*'])
 * @method PeriodoEscolar first($columns = ['*'])
*/
class PeriodoEscolarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'periodo',
        'identificacion_larga',
        'identificacion_corta',
        'fecha_inicio',
        'fecha_termino',
        'inicio_vacacional_ss',
        'termino_vacacional_ss',
        'num_dias_clase',
        'inicio_especial',
        'fin_especial',
        'cierre_horarios',
        'cierre_seleccion',
        'inicio_enc_estudiantil',
        'fin_enc_estudiantil',
        'inicio_sele_alumnos',
        'fin_sele_alumnos',
        'inicio_vacacional',
        'termino_vacacional',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PeriodoEscolar::class;
    }
}
