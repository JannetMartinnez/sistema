<?php

namespace App\Repositories;

use App\Models\AspirantesDocumento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AspirantesDocumentoRepository
 * @package App\Repositories
 * @version December 11, 2017, 5:23 am UTC
 *
 * @method AspirantesDocumento findWithoutFail($id, $columns = ['*'])
 * @method AspirantesDocumento find($id, $columns = ['*'])
 * @method AspirantesDocumento first($columns = ['*'])
*/
class AspirantesDocumentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'aspirantes_generales_id',
        'doc_digitalizado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AspirantesDocumento::class;
    }
}
