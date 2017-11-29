<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DeQuienDepende
 * @package App\Models
 * @version November 29, 2017, 5:53 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection AspiranteSocioeconomico
 * @property string descripcion
 * @property string|\Carbon\Carbon update_at
 * @property string|\Carbon\Carbon create_at
 */
class DeQuienDepende extends Model
{

    public $table = 'de_quien_dependes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'descripcion',
        'update_at',
        'create_at'
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
