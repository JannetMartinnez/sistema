<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pais
 * @package App\Models
 * @version October 9, 2017, 11:28 pm UTC
 *
 * @property string pais
 * @property string alfa2
 * @property string abrev
 */
class Pais extends Model
{

    public $table = 'paises';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'pais',
        'alfa2',
        'abrev'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pais' => 'string',
        'alfa2' => 'string',
        'abrev' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
