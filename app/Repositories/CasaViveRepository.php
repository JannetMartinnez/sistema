<?php

namespace App\Repositories;

use App\Models\CasaVive;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CasaViveRepository
 * @package App\Repositories
 * @version November 29, 2017, 5:54 pm UTC
 *
 * @method CasaVive findWithoutFail($id, $columns = ['*'])
 * @method CasaVive find($id, $columns = ['*'])
 * @method CasaVive first($columns = ['*'])
*/
class CasaViveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CasaVive::class;
    }
}
