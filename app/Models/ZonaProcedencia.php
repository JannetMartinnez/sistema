<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ZonaProcedencia
 * @package App\Models
 * @version December 7, 2017, 3:23 pm UTC
 *
 * @property string descripcion
 */
class ZonaProcedencia extends Model
{

    public $table = 'zona_procedencia';
    
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

    
}
