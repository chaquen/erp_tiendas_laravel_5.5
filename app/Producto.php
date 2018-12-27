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

    public function categoria(){
        return $this->belongsTo(Categoria::class,'fk_id_categoria');
    }
    public function inventario(){
        return $this->hasMany(DetalleInventario::class,'fk_id_producto');
    }
    public function scopeEstado($query,$estado){
        return $query->where('estado_producto',$estado);
    }
}
