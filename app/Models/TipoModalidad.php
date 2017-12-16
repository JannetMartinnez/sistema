<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoModalidad
 * @package App\Models
 * @version December 16, 2017, 5:13 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection aspirantesGenerales
 * @property \Illuminate\Database\Eloquent\Collection ConfigFechasInscripcione
 * @property string modalidad
 */
class TipoModalidad extends Model
{

    public $table = 'tipo_modalidad';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'modalidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'modalidad' => 'string'
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
