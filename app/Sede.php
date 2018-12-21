<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'nombre_sede', 
                'codigo_sede', 
                'direccion_sede', 
                'telefono_sede',                
                'fk_id_administrador',

    ];
}
