<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        				'nombre_cliente',
        				'documento',
        				'email',
        				'celular',
        				'telefono',
        				'direccion',
        				'limite_de_credito',
    ];
}
