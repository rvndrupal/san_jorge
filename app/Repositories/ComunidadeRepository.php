<?php

namespace App\Repositories;

use App\Models\Comunidade;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ComunidadeRepository
 * @package App\Repositories
 * @version May 16, 2019, 3:45 am UTC
 *
 * @method Comunidade findWithoutFail($id, $columns = ['*'])
 * @method Comunidade find($id, $columns = ['*'])
 * @method Comunidade first($columns = ['*'])
*/
class ComunidadeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descripcion',
        'link',
        'imagen'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Comunidade::class;
    }
}
