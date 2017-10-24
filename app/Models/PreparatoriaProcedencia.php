<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class PreparatoriaProcedencia
 * @package App\Models
 * @version October 23, 2017, 5:10 pm UTC
 *
 * @property \App\Models\EntidadesFederativa entidadesFederativa
 * @property \Illuminate\Database\Eloquent\Collection aspirantesGenerales
 * @property string clave_preparatoria
 * @property string nombre_preparatoria
 * @property integer entidades_federativas_id
 * @property integer municipios_id
 * @property string colonia
 * @property string servicio
 * @property string sostenimiento
 */
class PreparatoriaProcedencia extends Model
{

    public $table = 'preparatorias_de_procedencia';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'clave_preparatoria',
        'nombre_preparatoria',
        'entidades_federativas_id',
        'municipios_id',
        'colonia',
        'servicio',
        'sostenimiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'clave_preparatoria' => 'string',
        'nombre_preparatoria' => 'string',
        'entidades_federativas_id' => 'integer',
        'municipios_id' => 'integer',
        'colonia' => 'string',
        'servicio' => 'string',
        'sostenimiento' => 'string'
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
    public function entidadesFederativa()
    {
        return $this->belongsTo(\App\Models\EntidadesFederativa::class);
    }
}
