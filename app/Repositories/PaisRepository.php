<?php

namespace App\Repositories;

use App\Models\Pais;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PaisRepository
 * @package App\Repositories
 * @version October 9, 2017, 11:28 pm UTC
 *
 * @method Pais findWithoutFail($id, $columns = ['*'])
 * @method Pais find($id, $columns = ['*'])
 * @method Pais first($columns = ['*'])
*/
class PaisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pais',
        'alfa2',
        'abrev'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pais::class;
    }
}
