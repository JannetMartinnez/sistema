<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ocupacion_padres
 * @package App\Models
 * @version November 23, 2017, 7:15 pm UTC
 *
 * @property SERIAL id
 * @property KEY PRIMARY
 */
class ocupacion_padres extends Model
{

    public $table = 'ocupacion_padres';
    


    public $fillable = [
        'id',
        'PRIMARY'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'NOT NULL',
        'PRIMARY' => 'id'
    ];

    
}
