<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Comunidade
 * @package App\Models
 * @version May 16, 2019, 3:45 am UTC
 *
 * @property string titulo
 * @property string descripcion
 * @property string link
 * @property string imagen
 */
class Comunidade extends Model
{

    public $table = 'comunidades';



    public $fillable = [
        'titulo',
        'descripcion',
        'link',
        'imagen'
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
        'link' => 'string',
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
         'link' => 'required',
         'imagen' => 'required',
    ];


}
