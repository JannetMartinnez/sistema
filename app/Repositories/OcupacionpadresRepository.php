<?php

namespace App\Repositories;

use App\Models\Ocupacionpadres;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OcupacionpadresRepository
 * @package App\Repositories
 * @version November 23, 2017, 6:04 pm UTC
 *
 * @method Ocupacionpadres findWithoutFail($id, $columns = ['*'])
 * @method Ocupacionpadres find($id, $columns = ['*'])
 * @method Ocupacionpadres first($columns = ['*'])
*/
class OcupacionpadresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ocupacionpadres::class;
    }
}
