<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AspirantesDocumentos
 * @package App\Models
 * @version December 12, 2017, 5:36 pm UTC
 *
 * @property \App\Models\AspirantesGenerale aspirantesGenerale
 * @property \App\Models\DocDigitalizar docDigitalizar
 * @property integer aspirantes_generales_id
 * @property integer doc_digitalizar_id
 */
class AspirantesDocumentos extends Model
{

    public $table = 'aspirantes_documentos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'aspirantes_generales_id',
        'doc_digitalizar_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'aspirantes_generales_id' => 'integer',
        'doc_digitalizar_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function aspirantesGenerale()
    {
        return $this->belongsTo(\App\Models\AspirantesGenerale::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function docDigitalizar()
    {
        return $this->belongsTo(\App\Models\DocDigitalizar::class);
    }
}
