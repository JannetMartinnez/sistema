<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class PeriodoEscolar
 * @package App\Models
 * @version January 10, 2018, 8:50 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection ConfigFechasInscripcione
 * @property string periodo
 * @property string identificacion_larga
 * @property string identificacion_corta
 * @property string|\Carbon\Carbon fecha_inicio
 * @property string|\Carbon\Carbon fecha_termino
 * @property string|\Carbon\Carbon inicio_vacacional_ss
 * @property string|\Carbon\Carbon termino_vacacional_ss
 * @property integer num_dias_clase
 * @property string|\Carbon\Carbon inicio_especial
 * @property string|\Carbon\Carbon fin_especial
 * @property string cierre_horarios
 * @property string cierre_seleccion
 * @property string|\Carbon\Carbon inicio_enc_estudiantil
 * @property string|\Carbon\Carbon fin_enc_estudiantil
 * @property string|\Carbon\Carbon inicio_sele_alumnos
 * @property string|\Carbon\Carbon fin_sele_alumnos
 * @property string|\Carbon\Carbon inicio_vacacional
 * @property string|\Carbon\Carbon termino_vacacional
 * @property string status
 */
class PeriodoEscolar extends Model
{

    public $table = 'periodos_escolares';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'periodo' => 'string',
        'identificacion_larga' => 'string',
        'identificacion_corta' => 'string',
        'num_dias_clase' => 'integer',
        'cierre_horarios' => 'string',
        'cierre_seleccion' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function configFechasInscripciones()
    {
        return $this->hasMany(\App\Models\ConfigFechasInscripcione::class);
    }
}
