<?php

namespace App\Repositories;

use App\Models\Sectore;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SectoreRepository
 * @package App\Repositories
 * @version May 22, 2019, 6:59 pm UTC
 *
 * @method Sectore findWithoutFail($id, $columns = ['*'])
 * @method Sectore find($id, $columns = ['*'])
 * @method Sectore first($columns = ['*'])
*/
class SectoreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sectore::class;
    }
}
