<?php

namespace App\Repositories;

use App\Models\AspiranteSocioecomico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AspiranteSocioecomicoRepository
 * @package App\Repositories
 * @version November 29, 2017, 6:06 pm UTC
 *
 * @method AspiranteSocioecomico findWithoutFail($id, $columns = ['*'])
 * @method AspiranteSocioecomico find($id, $columns = ['*'])
 * @method AspiranteSocioecomico first($columns = ['*'])
*/
class AspiranteSocioecomicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'aspirantes_generales_id',
        'nivel_estudios_padres_id',
        'nivel_estudios_madres_id',
        'quien_vives_actual_id',
        'ingresos_padre',
        'ingresos_madre',
        'ingresos_hermanos',
        'ingresos_propios',
        'ingresos_otros',
        'ocupacion_padre_id',
        'ocupacion_madre_id',
        'de_quien_dependes_id',
        'casa_vives_id',
        'cuartos_personas_id',
        'personas_casas_id',
        'personas_dependen_id',
        'estado_union_padres_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AspiranteSocioecomico::class;
    }
}
