<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        				'codigo_producto',
        				'nombre_producto',
        				'descripcion_producto',
        				'tipo_venta_producto',
        				'unidades_por_caja',
        				'precio_compra',
        				'precio_venta',
        				'precio_mayoreo',
        				'porcentaje_ganancia',
        				'minimo_inventario',
        				'maximo_inventario',
        				'fk_id_categoria',
    ];
}
