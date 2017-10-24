<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ConfigFechaInscripcion
 * @package App\Models
 * @version October 24, 2017, 12:01 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection aspirantesGenerales
 * @property date sol_asp_fi
 * @property date sol_asp__ff
 * @property date val_datos_fi
 * @property date val_datos_ff
 * @property string|\Carbon\Carbon examen_ceneval
 * @property date fecha_resultados
 */
class ConfigFechaInscripcion extends Model
{

    public $table = 'config_fechas_inscripciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'sol_asp_fi',
        'sol_asp__ff',
        'val_datos_fi',
        'val_datos_ff',
        'examen_ceneval',
        'fecha_resultados'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sol_asp_fi' => 'date',
        'sol_asp__ff' => 'date',
        'val_datos_fi' => 'date',
        'val_datos_ff' => 'date',
        'fecha_resultados' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
