<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class NumerosPalabras
 * @package App\Models
 * @version December 1, 2017, 3:21 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection AspiranteSocioeconomico
 * @property \Illuminate\Database\Eloquent\Collection AspiranteSocioeconomico
 * @property \Illuminate\Database\Eloquent\Collection AspiranteSocioeconomico
 * @property integer numero
 * @property string descripcion
 */
class NumerosPalabras extends Model
{

    public $table = 'numeros_palabras';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'numero',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero' => 'integer',
        'descripcion' => 'string'
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
    public function aspiranteSocioeconomicos()
    {
        return $this->hasMany(\App\Models\AspiranteSocioeconomico::class);
    }

    /*
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     
    public function aspiranteSocioeconomicos()
    {
        return $this->hasMany(\App\Models\AspiranteSocioeconomico::class);
    }

   
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     
    public function aspiranteSocioeconomicos()
    {
        return $this->hasMany(\App\Models\AspiranteSocioeconomico::class);
    }
    */
}
