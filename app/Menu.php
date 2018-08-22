<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = [
        'tipo_plato', 'item', 'descripcion_item', 'precio_item', 
    ];

}
