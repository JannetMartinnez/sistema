<?php

namespace App\Repositories;

use App\Models\DocDigitalizar;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DocDigitalizarRepository
 * @package App\Repositories
 * @version December 12, 2017, 5:38 pm UTC
 *
 * @method DocDigitalizar findWithoutFail($id, $columns = ['*'])
 * @method DocDigitalizar find($id, $columns = ['*'])
 * @method DocDigitalizar first($columns = ['*'])
*/
class DocDigitalizarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_doc_id',
        'descrpcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DocDigitalizar::class;
    }
}
