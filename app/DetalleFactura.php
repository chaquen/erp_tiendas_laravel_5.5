<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=['fk_id_factura',
    					'fk_id_producto',
    					'cantidad_producto',
    					'descuento',
    					'valor_item'];
}
