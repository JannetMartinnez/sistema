<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AspirantesDocumento
 * @package App\Models
 * @version December 11, 2017, 5:23 am UTC
 *
 * @property string aspirantes_generales_id
 * @property string doc_digitalizado
 */
class AspirantesDocumento extends Model
{

    public $table = 'aspirantes_documento';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'aspirantes_generales_id',
        'doc_digitalizado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'aspirantes_generales_id' => 'string',
        'doc_digitalizado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
