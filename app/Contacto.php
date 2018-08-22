<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //
    protected $fillable = [
        'co_imagen', 'co_descripcion', 'co_informacion' 
    ];

}
