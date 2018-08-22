<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    //
    protected $fillable = [
        'nombre', 'correo', 'hora', 'fecha', 'comensales', 'telefono',
     ];
}
