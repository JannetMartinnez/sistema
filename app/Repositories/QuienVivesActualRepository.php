<?php

namespace App\Repositories;

use App\Models\QuienVivesActual;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class QuienVivesActualRepository
 * @package App\Repositories
 * @version November 29, 2017, 5:53 pm UTC
 *
 * @method QuienVivesActual findWithoutFail($id, $columns = ['*'])
 * @method QuienVivesActual find($id, $columns = ['*'])
 * @method QuienVivesActual first($columns = ['*'])
*/
class QuienVivesActualRepository extends BaseRepository
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
        return QuienVivesActual::class;
    }
}
