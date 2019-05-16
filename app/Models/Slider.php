<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Slider
 * @package App\Models
 * @version May 15, 2019, 2:14 am UTC
 *
 * @property string sli_imagen
 * @property string sli_textouno
 * @property string sli_textodos
 */
class Slider extends Model
{

    public $table = 'sliders';
    


    public $fillable = [
        'sli_imagen',
        'sli_textouno',
        'sli_textodos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sli_imagen' => 'string',
        'sli_textouno' => 'string',
        'sli_textodos' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sli_imagen' => 'required',
        'sli_textouno' => 'required',
        'sli_textodos' => 'required'
    ];

    
}
