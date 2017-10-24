<?php

namespace App\Repositories;

use App\Models\AspiranteGeneral;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AspiranteGeneralRepository
 * @package App\Repositories
 * @version October 4, 2017, 12:27 am UTC
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
        'folio_solicitud',
        'periodo',
        'ficha',
        'apellido_paterno_aspirante',
        'apellido_materno_aspirante',
        'nombres_aspirante',
        'fecha_nacimiento_asp',
        'sexo_asp',
        'escuela_procedencia_id',
        'promedio_bachillerato',
        'anio_termino_bachillerato',
        'calle_dom_actual',
        'municipio_nac',
        'codigo_postal',
        'carrera_op1_id',
        'carrera_op2_id',
        'nacionalidad_asp',
        'curp_asp',
        'entidad_federativa_proc_id',
        'municipio_proc_id',
        'entidad_federativa_dom_actual_id',
        'municipio_dom_actual_id',
        'codigo_postal_dom_actual',
        'colonia_dom_actual',
        'correo_elect_dom_actual',
        'telefono_fijo_dom_actual',
        'telefono_cel_aspirante',
        'zona_proc_aspirante',
        'oportunidades_aspirante',
        'nombres_padre',
        'apellido_paterno_padre',
        'apellido_materno_padre',
        'vive_padre',
        'nombres_madre',
        'apellido_paterno_madre',
        'apellido_materno_madre',
        'vive_madre',
        'nombres_tutor',
        'apellido_paterno_tutor',
        'apellido_materno_tutor',
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
