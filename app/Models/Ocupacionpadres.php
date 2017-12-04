<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Ocupacionpadres
 * @package App\Models
 * @version November 23, 2017, 6:04 pm UTC
 *
 * @property serial id
 * @property varchar(200) descripcion
 */
class Ocupacionpadres extends Model
{

    public $table = 'ocupacionpadres';
    


    public $fillable = [
        'id',
        'descripcion'
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
        'id' => 'not null',
        'descripcion' => 'not null'
    ];

    
}
