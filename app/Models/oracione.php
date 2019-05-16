<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class oracione
 * @package App\Models
 * @version May 16, 2019, 1:44 am UTC
 *
 * @property string titulo
 * @property string frase
 * @property string bloque
 */
class oracione extends Model
{

    public $table = 'oraciones';
    


    public $fillable = [
        'titulo',
        'frase',
        'bloque'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'frase' => 'string',
        'bloque' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'frase' => 'required',
        'bloque' => 'required'
    ];

    
}
