<?php

namespace App\Repositories;

use App\Models\DeQuienDepende;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DeQuienDependeRepository
 * @package App\Repositories
 * @version November 29, 2017, 5:53 pm UTC
 *
 * @method DeQuienDepende findWithoutFail($id, $columns = ['*'])
 * @method DeQuienDepende find($id, $columns = ['*'])
 * @method DeQuienDepende first($columns = ['*'])
*/
class DeQuienDependeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'update_at',
        'create_at'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DeQuienDepende::class;
    }
}
