<?php

namespace App\Repositories;

use App\Models\Bloqueuno;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BloqueunoRepository
 * @package App\Repositories
 * @version May 15, 2019, 12:48 am UTC
 *
 * @method Bloqueuno findWithoutFail($id, $columns = ['*'])
 * @method Bloqueuno find($id, $columns = ['*'])
 * @method Bloqueuno first($columns = ['*'])
*/
class BloqueunoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'direccion',
        'email',
        'telefono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Bloqueuno::class;
    }
}
