<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Carrera
 * @package App\Models
 * @version September 29, 2017, 1:56 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection AspirantesGenerale
 * @property \Illuminate\Database\Eloquent\Collection AspirantesGenerale
 * @property string nivel_escolar
 * @property string clave_oficial
 * @property string nombre_carrera
 * @property string nombre_reducido
 * @property string siglas
 * @property integer carga_maxima
 * @property integer carga_minima
 * @property date fecha_inicio
 * @property date fecha_termino
 * @property string clave_cosnet
 * @property integer creditos_totales
 * @property string titulo_entrega
 * @property string clave
 * @property string nivel
 * @property string consecturivo_carrera
 * @property string area_academica
 */
class Carrera extends Model
{

    public $table = 'carreras';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nivel_escolar',
        'clave_oficial',
        'nombre_carrera',
        'nombre_reducido',
        'siglas',
        'carga_maxima',
        'carga_minima',
        'fecha_inicio',
        'fecha_termino',
        'clave_cosnet',
        'creditos_totales',
        'titulo_entrega',
        'clave',
        'nivel',
        'consecturivo_carrera',
        'area_academica'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nivel_escolar' => 'string',
        'clave_oficial' => 'string',
        'nombre_carrera' => 'string',
        'nombre_reducido' => 'string',
        'siglas' => 'string',
        'carga_maxima' => 'integer',
        'carga_minima' => 'integer',
        'fecha_inicio' => 'date',
        'fecha_termino' => 'date',
        'clave_cosnet' => 'string',
        'creditos_totales' => 'integer',
        'titulo_entrega' => 'string',
        'clave' => 'string',
        'nivel' => 'string',
        'consecturivo_carrera' => 'string',
        'area_academica' => 'string'
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
    public function aspirantesGenerales()
    {
        return $this->hasMany(\App\Models\AspirantesGenerale::class);
    }

}
