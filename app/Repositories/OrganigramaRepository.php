<?php

namespace App\Repositories;

use App\Models\Organigrama;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrganigramaRepository
 * @package App\Repositories
 * @version October 20, 2017, 4:14 pm UTC
 *
 * @method Organigrama findWithoutFail($id, $columns = ['*'])
 * @method Organigrama find($id, $columns = ['*'])
 * @method Organigrama first($columns = ['*'])
*/
class OrganigramaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Organigrama::class;
    }
}
