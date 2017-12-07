<?php

namespace App\Repositories;

use App\Models\ZonaProcedencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ZonaProcedenciaRepository
 * @package App\Repositories
 * @version December 7, 2017, 3:23 pm UTC
 *
 * @method ZonaProcedencia findWithoutFail($id, $columns = ['*'])
 * @method ZonaProcedencia find($id, $columns = ['*'])
 * @method ZonaProcedencia first($columns = ['*'])
*/
class ZonaProcedenciaRepository extends BaseRepository
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
        return ZonaProcedencia::class;
    }
}
