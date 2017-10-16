<?php

namespace App\Models;

use Eloquent as Model;
/**
 * Class Municipio
 * @package App\Models
 * @version October 12, 2017, 11:04 pm UTC
 *
 * @property \App\Models\EntidadesFederativa entidadesFederativa
 * @property string nombre_municipio
 * @property integer clave_entidad
 * @property integer entidades_federativas_id
 */
class Municipio extends Model
{

    public $table = 'municipios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre_municipio',
        'clave_entidad',
        'entidades_federativas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_municipio' => 'string',
        'clave_entidad' => 'integer',
        'entidades_federativas_id' => 'integer'
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

    //Lance todos los municipios de un estado 
    public static function municipios($id)
    {
        return Municipio::where('entidades_federativas_id',$id)->get();
    }
}
