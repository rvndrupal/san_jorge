<?php

namespace App\Repositories;

use App\Models\Slider;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SliderRepository
 * @package App\Repositories
 * @version May 15, 2019, 2:14 am UTC
 *
 * @method Slider findWithoutFail($id, $columns = ['*'])
 * @method Slider find($id, $columns = ['*'])
 * @method Slider first($columns = ['*'])
*/
class SliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sli_imagen',
        'sli_textouno',
        'sli_textodos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Slider::class;
    }
}
