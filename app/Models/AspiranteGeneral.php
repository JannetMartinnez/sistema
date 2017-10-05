<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AspiranteGeneral
 * @package App\Models
 * @version September 29, 2017, 1:57 pm UTC
 *
 * @property \App\Models\Carrera carrera
 * @property \App\Models\Carrera carrera
 * @property \App\Models\EntidadesFederativa entidadesFederativa
 * @property \App\Models\EntidadesFederativa entidadesFederativa
 * @property \App\Models\User user
 * @property integer users_id
 * @property integer entidades_federativas_id
 * @property integer carreras_id
 * @property integer folio_solicitud
 * @property string periodo
 * @property integer ficha
 * @property string curp_asp_2
 * @property string apellidos_aspirante
 * @property string nombres_aspirante
 * @property date fecha_nacimiento_asp
 * @property string sexo_asp
 * @property string estado_civil_asp
 * @property integer tipo_escuela
 * @property integer clave_escuela
 * @property string escuela_procedencia
 * @property float promedio_bachillerato
 * @property integer anio_termino_bachillerato
 * @property string calle_dom_actual
 * @property string municipio_nac
 * @property integer codigo_postal
 * @property integer carrera_op1_id
 * @property string nacionalidad_asp
 * @property string curp_asp
 * @property integer carrera_op2_id
 * @property integer entidad_federativa_proc_id
 * @property integer municipio_proc_id
 * @property integer entidad_federativa_dom_actual_id
 * @property integer municipio_dom_actual_id
 * @property integer codigo_postal_dom_actual
 * @property string colonia_dom_actual
 * @property string correo_elect_dom_actual
 * @property string telefono_dom_actual
 * @property integer zona_proc_aspirante
 * @property boolean oportunidades_aspirante
 * @property string nombres_padre
 * @property string apellidos_padre
 * @property boolean vive_padre
 * @property string nombres_madre
 * @property string apellidos_madre
 * @property boolean vive_madre
 * @property string nombres_tutor
 * @property string apellidos_tutor
 * @property integer usuario_id
 */
class AspiranteGeneral extends Model
{

    public $table = 'aspirantes_generales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'users_id' => 'integer',
        'entidades_federativas_id' => 'integer',
        'carreras_id' => 'integer',
        'folio_solicitud' => 'integer',
        'periodo' => 'string',
        'ficha' => 'integer',
        'curp_asp_2' => 'string',
        'apellidos_aspirante' => 'string',
        'nombres_aspirante' => 'string',
        'fecha_nacimiento_asp' => 'date',
        'sexo_asp' => 'string',
        'estado_civil_asp' => 'string',
        'tipo_escuela' => 'integer',
        'clave_escuela' => 'integer',
        'escuela_procedencia' => 'string',
        'promedio_bachillerato' => 'float',
        'anio_termino_bachillerato' => 'integer',
        'calle_dom_actual' => 'string',
        'municipio_nac' => 'string',
        'codigo_postal' => 'integer',
        'carrera_op1_id' => 'integer',
        'nacionalidad_asp' => 'string',
        'curp_asp' => 'string',
        'carrera_op2_id' => 'integer',
        'entidad_federativa_proc_id' => 'integer',
        'municipio_proc_id' => 'integer',
        'entidad_federativa_dom_actual_id' => 'integer',
        'municipio_dom_actual_id' => 'integer',
        'codigo_postal_dom_actual' => 'integer',
        'colonia_dom_actual' => 'string',
        'correo_elect_dom_actual' => 'string',
        'telefono_dom_actual' => 'string',
        'zona_proc_aspirante' => 'integer',
        'oportunidades_aspirante' => 'boolean',
        'nombres_padre' => 'string',
        'apellidos_padre' => 'string',
        'vive_padre' => 'boolean',
        'nombres_madre' => 'string',
        'apellidos_madre' => 'string',
        'vive_madre' => 'boolean',
        'nombres_tutor' => 'string',
        'apellidos_tutor' => 'string',
        'usuario_id' => 'integer'
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
