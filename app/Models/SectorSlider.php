<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class SectorSlider
 * @package App\Models
 * @version May 23, 2019, 10:12 pm UTC
 *
 * @property string titulo
 * @property string descripcion
 * @property string imagen
 */
class SectorSlider extends Model
{

    public $table = 'sector_sliders';



    public $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'descripcion' => 'string',
        'imagen' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required'
    ];






}
