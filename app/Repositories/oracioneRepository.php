<?php

namespace App\Repositories;

use App\Models\oracione;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class oracioneRepository
 * @package App\Repositories
 * @version May 16, 2019, 1:44 am UTC
 *
 * @method oracione findWithoutFail($id, $columns = ['*'])
 * @method oracione find($id, $columns = ['*'])
 * @method oracione first($columns = ['*'])
*/
class oracioneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'frase',
        'bloque'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return oracione::class;
    }
}
