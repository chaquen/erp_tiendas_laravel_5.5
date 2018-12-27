<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_categoria',
    ];

    public function productos(){
    	return $this->hasMany(Producto::class,'fk_id_categoria');
    }

    public function scopeEstado($query,$estado){
    	return $query->where('estado_categoria',$estado);
    }
}
