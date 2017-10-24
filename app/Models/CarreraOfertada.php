<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CarreraOfertada
 * @package App\Models
 * @version October 23, 2017, 5:55 pm UTC
 *
 * @property \App\Models\Carrera carrera
 * @property \Illuminate\Database\Eloquent\Collection aspirantesGenerales
 * @property integer carreras_id
 * @property date fecha_inicio
 * @property date feha_fin
 */
class CarreraOfertada extends Model
{

    public $table = 'carreras_ofertadas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'carreras_id',
        'fecha_inicio',
        'feha_fin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'carreras_id' => 'integer',
        'fecha_inicio' => 'date',
        'feha_fin' => 'date'
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
}
