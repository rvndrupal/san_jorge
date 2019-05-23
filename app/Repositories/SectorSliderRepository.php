<?php

namespace App\Repositories;

use App\Models\SectorSlider;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SectorSliderRepository
 * @package App\Repositories
 * @version May 23, 2019, 10:12 pm UTC
 *
 * @method SectorSlider findWithoutFail($id, $columns = ['*'])
 * @method SectorSlider find($id, $columns = ['*'])
 * @method SectorSlider first($columns = ['*'])
*/
class SectorSliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descripcion',
        'imagen'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SectorSlider::class;
    }
}
