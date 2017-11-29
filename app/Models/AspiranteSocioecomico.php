<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AspiranteSocioecomico
 * @package App\Models
 * @version November 29, 2017, 6:06 pm UTC
 *
 * @property \App\Models\AspirantesGenerale aspirantesGenerale
 * @property \App\Models\EstudiosPadre estudiosPadre
 * @property \App\Models\QuienVivesActual quienVivesActual
 * @property \App\Models\OcupacionPadre ocupacionPadre
 * @property \App\Models\OcupacionPadre ocupacionPadre
 * @property \App\Models\DeQuienDepende deQuienDepende
 * @property \App\Models\CasaVife casaVife
 * @property \App\Models\NumerosPalabra numerosPalabra
 * @property \App\Models\NumerosPalabra numerosPalabra
 * @property \App\Models\NumerosPalabra numerosPalabra
 * @property \App\Models\EstadoUnionPadre estadoUnionPadre
 * @property \App\Models\EstudiosPadre estudiosPadre
 * @property integer aspirantes_generales_id
 * @property integer nivel_estudios_padres_id
 * @property integer nivel_estudios_madres_id
 * @property integer quien_vives_actual_id
 * @property float ingresos_padre
 * @property float ingresos_madre
 * @property float ingresos_hermanos
 * @property float ingresos_propios
 * @property float ingresos_otros
 * @property integer ocupacion_padre_id
 * @property integer ocupacion_madre_id
 * @property integer de_quien_dependes_id
 * @property integer casa_vives_id
 * @property integer cuartos_personas_id
 * @property integer personas_casas_id
 * @property integer personas_dependen_id
 * @property integer estado_union_padres_id
 */
class AspiranteSocioecomico extends Model
{

    public $table = 'aspirante_socioeconomico';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'aspirantes_generales_id',
        'nivel_estudios_padres_id',
        'nivel_estudios_madres_id',
        'quien_vives_actual_id',
        'ingresos_padre',
        'ingresos_madre',
        'ingresos_hermanos',
        'ingresos_propios',
        'ingresos_otros',
        'ocupacion_padre_id',
        'ocupacion_madre_id',
        'de_quien_dependes_id',
        'casa_vives_id',
        'cuartos_personas_id',
        'personas_casas_id',
        'personas_dependen_id',
        'estado_union_padres_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'aspirantes_generales_id' => 'integer',
        'nivel_estudios_padres_id' => 'integer',
        'nivel_estudios_madres_id' => 'integer',
        'quien_vives_actual_id' => 'integer',
        'ingresos_padre' => 'float',
        'ingresos_madre' => 'float',
        'ingresos_hermanos' => 'float',
        'ingresos_propios' => 'float',
        'ingresos_otros' => 'float',
        'ocupacion_padre_id' => 'integer',
        'ocupacion_madre_id' => 'integer',
        'de_quien_dependes_id' => 'integer',
        'casa_vives_id' => 'integer',
        'cuartos_personas_id' => 'integer',
        'personas_casas_id' => 'integer',
        'personas_dependen_id' => 'integer',
        'estado_union_padres_id' => 'integer'
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
    public function quienVivesActual()
    {
        return $this->belongsTo(\App\Models\QuienVivesActual::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ocupacionPadre()
    {
        return $this->belongsTo(\App\Models\OcupacionPadre::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function deQuienDepende()
    {
        return $this->belongsTo(\App\Models\DeQuienDepende::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function casaVife()
    {
        return $this->belongsTo(\App\Models\CasaVife::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function numerosPalabra()
    {
        return $this->belongsTo(\App\Models\NumerosPalabra::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function estadoUnionPadre()
    {
        return $this->belongsTo(\App\Models\EstadoUnionPadre::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function estudiosPadre()
    {
        return $this->belongsTo(\App\Models\EstudiosPadre::class);
    }
}
