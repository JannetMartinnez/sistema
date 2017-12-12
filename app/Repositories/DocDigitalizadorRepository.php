<?php

namespace App\Repositories;

use App\Models\DocDigitalizador;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DocDigitalizadorRepository
 * @package App\Repositories
 * @version December 11, 2017, 4:10 pm UTC
 *
 * @method DocDigitalizador findWithoutFail($id, $columns = ['*'])
 * @method DocDigitalizador find($id, $columns = ['*'])
 * @method DocDigitalizador first($columns = ['*'])
*/
class DocDigitalizadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_doc_id',
        'curp',
        'comp_dom',
        'foto',
        'acta_na'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DocDigitalizador::class;
    }
}
