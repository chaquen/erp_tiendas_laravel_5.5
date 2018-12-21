<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impuesto extends Model
{
    //
    protected $fillable=[
    				'nombre_impuesto',
    				'valor_impuesto'
    			];
}
