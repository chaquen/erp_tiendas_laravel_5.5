<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleImpuesto extends Model
{
    //
   protected $fillable =[
   						'fk_id_impuesto',
   						'fk_id_detalle_inventario',
   						'estado'
   					];
}
