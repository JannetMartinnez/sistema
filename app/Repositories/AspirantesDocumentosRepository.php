<?php

namespace App\Repositories;

use App\Models\AspirantesDocumentos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AspirantesDocumentosRepository
 * @package App\Repositories
 * @version December 12, 2017, 5:36 pm UTC
 *
 * @method AspirantesDocumentos findWithoutFail($id, $columns = ['*'])
 * @method AspirantesDocumentos find($id, $columns = ['*'])
 * @method AspirantesDocumentos first($columns = ['*'])
*/
class AspirantesDocumentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'aspirantes_generales_id',
        'doc_digitalizar_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AspirantesDocumentos::class;
    }
}
