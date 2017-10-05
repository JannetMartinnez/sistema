<?php

namespace App\Repositories;

use App\Models\Carrera;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CarreraRepository
 * @package App\Repositories
 * @version September 29, 2017, 1:56 pm UTC
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
     * Configure the Model
     **/
    public function model()
    {
        return Carrera::class;
    }
}
