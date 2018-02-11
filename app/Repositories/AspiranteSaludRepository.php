<?php

namespace App\Repositories;

use App\Models\AspiranteSalud;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AspiranteSaludRepository
 * @package App\Repositories
 * @version December 7, 2017, 5:54 pm UTC
 *
 * @method AspiranteSalud findWithoutFail($id, $columns = ['*'])
 * @method AspiranteSalud find($id, $columns = ['*'])
 * @method AspiranteSalud first($columns = ['*'])
*/
class AspiranteSaludRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return AspiranteSalud::class;
    }
}
