<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AspiranteSalud
 * @package App\Models
 * @version December 7, 2017, 5:54 pm UTC
 *
 * @property \App\Models\AspirantesGenerale aspirantesGenerale
 * @property string tipo_sangre
 * @property boolean baston
 * @property boolean muletas
 * @property boolean silla_ruedas
 * @property boolean calzado_especial
 * @property string otros
 * @property boolean difi_escuchar
 * @property boolean apara_escuchar
 * @property boolean proble_ver
 * @property boolean utiliza_lentes
 * @property boolean enfer_cronode
 * @property boolean enfer_infec_conta
 * @property boolean enfer_cance
 * @property boolean problema_lenguaje
 * @property boolean dificultad_aprender
 * @property boolean enfer_como
 * @property boolean problemas_relacionarte
 * @property boolean tienes_fobia
 * @property integer aspirantes_generales_id
 */
class AspiranteSalud extends Model
{

    public $table = 'aspirante_salud';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'tipo_sangre',
        'baston',
        'muletas',
        'silla_ruedas',
        'calzado_especial',
        'otros',
        'difi_escuchar',
        'apara_escuchar',
        'proble_ver',
        'utiliza_lentes',
        'enfer_cronode',
        'enfer_infec_conta',
        'enfer_cance',
        'problema_lenguaje',
        'dificultad_aprender',
        'enfer_como',
        'problemas_relacionarte',
        'tienes_fobia',
        'aspirantes_generales_id',
        'update_at',
        'create_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo_sangre' => 'string',
        'baston' => 'boolean',
        'muletas' => 'boolean',
        'silla_ruedas' => 'boolean',
        'calzado_especial' => 'boolean',
        'otros' => 'string',
        'difi_escuchar' => 'boolean',
        'apara_escuchar' => 'boolean',
        'proble_ver' => 'boolean',
        'utiliza_lentes' => 'boolean',
        'enfer_cronode' => 'boolean',
        'enfer_infec_conta' => 'boolean',
        'enfer_cance' => 'boolean',
        'problema_lenguaje' => 'boolean',
        'dificultad_aprender' => 'boolean',
        'enfer_como' => 'boolean',
        'problemas_relacionarte' => 'boolean',
        'tienes_fobia' => 'boolean',
        'aspirantes_generales_id' => 'integer'
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
}
