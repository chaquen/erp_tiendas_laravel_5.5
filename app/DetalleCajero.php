<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCajero extends Model
{
    //
    protected $fillable = [
    						'fk_id_usuario',
    						'fk_id_sede',
    						'tipo',
    						'estado'
    					];
}
