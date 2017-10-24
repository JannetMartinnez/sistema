<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Carrera
 * @package App\Models
 * @version October 20, 2017, 5:56 pm UTC
 *
 * @property \App\Models\Organigrama organigrama
 * @property string nivel_escolar
 * @property string clave_oficial
 * @property string clave_cosnet
 * @property string nombre_carrera
 * @property string nombre_reducido
 * @property string siglas
 * @property date fecha_inicio
 * @property date fecha_termino
 * @property integer creditos_totales
 * @property integer carga_maxima
 * @property integer carga_minima
 * @property integer area_id
 */
class Carrera extends Model
{

    public $table = 'carreras';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nivel_escolar',
        'clave_oficial',
        'clave_cosnet',
        'nombre_carrera',
        'nombre_reducido',
        'siglas',
        'fecha_inicio',
        'fecha_termino',
        'creditos_totales',
        'carga_maxima',
        'carga_minima',
        'area_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nivel_escolar' => 'string',
        'clave_oficial' => 'string',
        'clave_cosnet' => 'string',
        'nombre_carrera' => 'string',
        'nombre_reducido' => 'string',
        'siglas' => 'string',
        'fecha_inicio' => 'date',
        'fecha_termino' => 'date',
        'creditos_totales' => 'integer',
        'carga_maxima' => 'integer',
        'carga_minima' => 'integer',
        'area_id' => 'integer'
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
    public function organigrama()
    {
        return $this->belongsTo(\App\Models\Organigrama::class);
    }
}
