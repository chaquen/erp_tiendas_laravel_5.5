<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleInventario extends Model
{
    protected $table = 'detalles_inventario';
    //
    protected $fillable =[
               'fk_id_producto',
			   'fk_id_sede',
			   'fecha_caducidad',
			   'cantidad_existencias',
			   'precio_venta_sede',
			   'precio_mayoreo_sede',
			   'porcentaje_ganancia',
			   'minimo_inventario_sede'
    		];
}
