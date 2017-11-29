<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CasaVive
 * @package App\Models
 * @version November 29, 2017, 5:54 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection AspiranteSocioeconomico
 * @property string descripcion
 */
class CasaVive extends Model
{

    public $table = 'casa_vives';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
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
}
