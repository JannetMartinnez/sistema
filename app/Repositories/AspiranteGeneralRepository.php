<?php

namespace App\Repositories;

use App\Models\AspiranteGeneral;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AspiranteGeneralRepository
 * @package App\Repositories
 * @version September 29, 2017, 1:57 pm UTC
 *
 * @method AspiranteGeneral findWithoutFail($id, $columns = ['*'])
 * @method AspiranteGeneral find($id, $columns = ['*'])
 * @method AspiranteGeneral first($columns = ['*'])
*/
class AspiranteGeneralRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'users_id',
        'entidades_federativas_id',
        'carreras_id',
        'folio_solicitud',
        'periodo',
        'ficha',
        'curp_asp_2',
        'apellidos_aspirante',
        'nombres_aspirante',
        'fecha_nacimiento_asp',
        'sexo_asp',
        'estado_civil_asp',
        'tipo_escuela',
        'clave_escuela',
        'escuela_procedencia',
        'promedio_bachillerato',
        'anio_termino_bachillerato',
        'calle_dom_actual',
        'municipio_nac',
        'codigo_postal',
        'carrera_op1_id',
        'nacionalidad_asp',
        'curp_asp',
        'carrera_op2_id',
        'entidad_federativa_proc_id',
        'municipio_proc_id',
        'entidad_federativa_dom_actual_id',
        'municipio_dom_actual_id',
        'codigo_postal_dom_actual',
        'colonia_dom_actual',
        'correo_elect_dom_actual',
        'telefono_dom_actual',
        'zona_proc_aspirante',
        'oportunidades_aspirante',
        'nombres_padre',
        'apellidos_padre',
        'vive_padre',
        'nombres_madre',
        'apellidos_madre',
        'vive_madre',
        'nombres_tutor',
        'apellidos_tutor',
        'usuario_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AspiranteGeneral::class;
    }
}
