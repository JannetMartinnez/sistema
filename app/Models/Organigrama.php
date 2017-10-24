<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Organigrama
 * @package App\Models
 * @version October 20, 2017, 4:14 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Carrera
 * @property string clave_area
 * @property string descripcion_area
 * @property string descripcion_corta
 * @property string area_depende
 * @property integer nivel
 * @property string tipo_area
 * @property string correo_electronico
 * @property boolean activo
 */
class Organigrama extends Model
{

    public $table = 'organigrama';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'clave_area',
        'descripcion_area',
        'descripcion_corta',
        'area_depende',
        'nivel',
        'tipo_area',
        'correo_electronico',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'clave_area' => 'string',
        'descripcion_area' => 'string',
        'descripcion_corta' => 'string',
        'area_depende' => 'string',
        'nivel' => 'integer',
        'tipo_area' => 'string',
        'correo_electronico' => 'string',
        'activo' => 'boolean'
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
    public function carreras()
    {
        return $this->hasMany(\App\Models\Carrera::class);
    }
}
