<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Bloqueuno
 * @package App\Models
 * @version May 15, 2019, 12:48 am UTC
 *
 * @property string direccion
 * @property string email
 * @property string telefono
 */
class Bloqueuno extends Model
{

    public $table = 'bloqueunos';
    


    public $fillable = [
        'direccion',
        'email',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'direccion' => 'string',
        'email' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'direccion' => 'required',
        'email' => 'required',
        'telefono' => 'required'
    ];

    
}
