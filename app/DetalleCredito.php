<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCredito extends Model
{
    //
    protected $fillable=[
    						'fk_id_credito',
    						'observacion',
    						'abono',
    						'fecha_abono'
    					];
}
