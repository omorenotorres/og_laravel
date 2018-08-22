<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    //
    protected $fillable = [
        'p_titulo', 'p_descripcion', 'p_imagen',
    ];

}
