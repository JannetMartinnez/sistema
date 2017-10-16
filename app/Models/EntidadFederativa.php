<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class EntidadFederativa
 * @package App\Models
 * @version October 4, 2017, 12:30 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection AspirantesGenerale
 * @property \Illuminate\Database\Eloquent\Collection AspirantesGenerale
 * @property string clave_entidad
 * @property string nombre_entidad
 * @property string abreviatura
 * @property integer pais_id
 */
class EntidadFederativa extends Model
{

    public $table = 'entidades_federativas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'clave_entidad',
        'nombre_entidad',
        'abreviatura',
        'pais_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'clave_entidad' => 'string',
        'nombre_entidad' => 'string',
        'abreviatura' => 'string',
        'pais_id' => 'integer'
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
    public function aspirantesGenerales()
    {
        return $this->hasMany(\App\Models\AspirantesGenerale::class);
    }

}
