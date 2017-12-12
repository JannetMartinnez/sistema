<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DocDigitalizador
 * @package App\Models
 * @version December 11, 2017, 4:10 pm UTC
 *
 * @property integer tipo_doc_id
 * @property string curp
 * @property string comp_dom
 * @property string foto
 * @property string acta_na
 */
class DocDigitalizador extends Model
{

    public $table = 'doc_digitalizador';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'tipo_doc_id',
        'curp',
        'comp_dom',
        'foto',
        'acta_na'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo_doc_id' => 'integer',
        'curp' => 'string',
        'comp_dom' => 'string',
        'foto' => 'string',
        'acta_na' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
