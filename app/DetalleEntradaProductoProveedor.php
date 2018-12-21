<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleEntradaProductoProveedor extends Model
{
    //
    protected $fillable=[
    	'fk_id_proveedor',
    	'fk_id_det_inventario',
    	'cantidad_entrada',
    	'fecha_caducidad',
    	'observaciones'

    ];
}
