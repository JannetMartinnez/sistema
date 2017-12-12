<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DocDigitalizar
 * @package App\Models
 * @version December 12, 2017, 5:38 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection AspirantesDocumento
 * @property integer tipo_doc_id
 * @property string descrpcion
 */
class DocDigitalizar extends Model
{

    public $table = 'doc_digitalizar';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'tipo_doc_id',
        'descrpcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo_doc_id' => 'integer',
        'descrpcion' => 'string'
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
    public function aspirantesDocumentos()
    {
        return $this->hasMany(\App\Models\AspirantesDocumento::class);
    }
}
