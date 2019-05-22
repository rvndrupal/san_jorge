<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Sectore
 * @package App\Models
 * @version May 22, 2019, 6:59 pm UTC
 *
 * @property string nombre
 */
class Sectore extends Model
{

    public $table = 'sectores';



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    //relacion con usuario
    public function user()
    {
        return $this->hasOne('App\User');
    }


}
