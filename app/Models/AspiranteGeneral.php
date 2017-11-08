<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AspiranteGeneral
 * @package App\Models
 * @version October 4, 2017, 12:27 am UTC
 *
 * @property \App\Models\Carrera carrera
 * @property \App\Models\Carrera carrera
 * @property \App\Models\EntidadesFederativa entidadesFederativa
 * @property \App\Models\EntidadesFederativa entidadesFederativa
 * @property \App\Models\User user
 * @property integer folio_solicitud
 * @property string periodo
 * @property integer ficha
 * @property string apellido_paterno_aspirante
 * @property string apellido_materno_aspirante
 * @property string nombres_aspirante
 * @property date fecha_nacimiento_asp
 * @property string sexo_asp
 * @property string escuela_procedencia_id
 * @property float promedio_bachillerato
 * @property integer anio_termino_bachillerato
 * @property string calle_dom_actual
 * @property string municipio_nac
 * @property integer codigo_postal
 * @property integer carrera_op1_id
 * @property integer carrera_op2_id
 * @property string nacionalidad_asp
 * @property string curp_asp
 * @property integer entidad_federativa_proc_id
 * @property integer municipio_proc_id
 * @property integer entidad_federativa_dom_actual_id
 * @property integer municipio_dom_actual_id
 * @property integer codigo_postal_dom_actual
 * @property string colonia_dom_actual
 * @property string correo_elect_dom_actual
 * @property string telefono_fijo_dom_actual
 * @property string telefono_cel_aspirante
 * @property integer zona_proc_aspirante
 * @property boolean oportunidades_aspirante
 * @property string nombres_padre
 * @property string apellido_paterno_padre
 * @property string apellido_materno_padre
 * @property boolean vive_padre
 * @property string nombres_madre
 * @property string apellido_paterno_madre
 * @property string apellido_materno_madre
 * @property boolean vive_madre
 * @property string nombres_tutor
 * @property string apellido_paterno_tutor
 * @property string apellido_materno_tutor
 * @property integer usuario_id
 */
class AspiranteGeneral extends Model
{

    public $table = 'aspirantes_generales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
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
        'usuario_id',
        'tipo_modalidad_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'folio_solicitud' => 'integer',
        'periodo' => 'string',
        'ficha' => 'integer',
        'apellido_paterno_aspirante' => 'string',
        'apellido_materno_aspirante' => 'string',
        'nombres_aspirante' => 'string',
        'fecha_nacimiento_asp' => 'date',
        'sexo_asp' => 'string',
        'escuela_procedencia_id' => 'string',
        'promedio_bachillerato' => 'float',
        'anio_termino_bachillerato' => 'integer',
        'calle_dom_actual' => 'string',
        'municipio_nac' => 'string',
        'codigo_postal' => 'integer',
        'carrera_op1_id' => 'integer',
        'carrera_op2_id' => 'integer',
        'nacionalidad_asp' => 'string',
        'curp_asp' => 'string',
        'entidad_federativa_proc_id' => 'integer',
        'municipio_proc_id' => 'integer',
        'entidad_federativa_dom_actual_id' => 'integer',
        'municipio_dom_actual_id' => 'integer',
        'codigo_postal_dom_actual' => 'integer',
        'colonia_dom_actual' => 'string',
        'correo_elect_dom_actual' => 'string',
        'telefono_fijo_dom_actual' => 'string',
        'telefono_cel_aspirante' => 'string',
        'zona_proc_aspirante' => 'integer',
        'oportunidades_aspirante' => 'boolean',
        'nombres_padre' => 'string',
        'apellido_paterno_padre' => 'string',
        'apellido_materno_padre' => 'string',
        'vive_padre' => 'boolean',
        'nombres_madre' => 'string',
        'apellido_paterno_madre' => 'string',
        'apellido_materno_madre' => 'string',
        'vive_madre' => 'boolean',
        'nombres_tutor' => 'string',
        'apellido_paterno_tutor' => 'string',
        'apellido_materno_tutor' => 'string',
        'usuario_id' => 'integer',
        'tipo_modalidad_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function carrera()
    {
        return $this->belongsTo(\App\Models\Carrera::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function entidadesFederativa()
    {
        return $this->belongsTo(\App\Models\EntidadesFederativa::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

}