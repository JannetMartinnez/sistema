<?php

namespace App\Repositories;

use App\Models\CarreraOfertada;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CarreraOfertadaRepository
 * @package App\Repositories
 * @version October 23, 2017, 5:55 pm UTC
 *
 * @method CarreraOfertada findWithoutFail($id, $columns = ['*'])
 * @method CarreraOfertada find($id, $columns = ['*'])
 * @method CarreraOfertada first($columns = ['*'])
*/
class CarreraOfertadaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'carreras_id',
        'fecha_inicio',
        'feha_fin'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CarreraOfertada::class;
    }
}
