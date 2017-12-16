<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ConfigFechaInscripcion
 * @package App\Models
 * @version December 16, 2017, 7:12 am UTC
 *
 * @property \App\Models\PeriodosEscolare periodosEscolare
 * @property \App\Models\TipoModalidad tipoModalidad
 * @property \Illuminate\Database\Eloquent\Collection aspirantesGenerales
 * @property date sol_asp_fi
 * @property date sol_asp_ff
 * @property date val_datos_fi
 * @property date val_datos_ff
 * @property string|\Carbon\Carbon examen_ceneval
 * @property date fecha_resultados
 * @property integer periodo_entrada_id
 * @property string|\Carbon\Carbon fecha_limite_pago
 * @property float cantidad_pagar
 * @property integer tipo_modalidad_id
 */
class ConfigFechaInscripcion extends Model
{

    public $table = 'config_fechas_inscripciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sol_asp_fi' => 'date',
        'sol_asp_ff' => 'date',
        'val_datos_fi' => 'date',
        'val_datos_ff' => 'date',
        'fecha_resultados' => 'date',
        'periodo_entrada_id' => 'integer',
        'cantidad_pagar' => 'float',
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
    public function periodosEscolare()
    {
        return $this->belongsTo(\App\Models\PeriodosEscolare::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoModalidad()
    {
        return $this->belongsTo(\App\Models\TipoModalidad::class);
    }
}
