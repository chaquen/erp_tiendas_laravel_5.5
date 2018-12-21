<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
    	'fk_id_vendedor',
    	'fk_id_cliente',
    	'estado_factura',
    	'fk_id_sede',
    	'observaciones'
    ];
}
