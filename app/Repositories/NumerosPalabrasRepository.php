<?php

namespace App\Repositories;

use App\Models\NumerosPalabras;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NumerosPalabrasRepository
 * @package App\Repositories
 * @version December 1, 2017, 3:21 am UTC
 *
 * @method NumerosPalabras findWithoutFail($id, $columns = ['*'])
 * @method NumerosPalabras find($id, $columns = ['*'])
 * @method NumerosPalabras first($columns = ['*'])
*/
class NumerosPalabrasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return NumerosPalabras::class;
    }
}
