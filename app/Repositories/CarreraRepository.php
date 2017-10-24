<?php

namespace App\Repositories;

use App\Models\Carrera;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CarreraRepository
 * @package App\Repositories
 * @version October 20, 2017, 5:56 pm UTC
 *
 * @method Carrera findWithoutFail($id, $columns = ['*'])
 * @method Carrera find($id, $columns = ['*'])
 * @method Carrera first($columns = ['*'])
*/
class CarreraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nivel_escolar',
        'clave_oficial',
        'clave_cosnet',
        'nombre_carrera',
        'nombre_reducido',
        'siglas',
        'fecha_inicio',
        'fecha_termino',
        'creditos_totales',
        'carga_maxima',
        'carga_minima',
        'area_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Carrera::class;
    }
}
