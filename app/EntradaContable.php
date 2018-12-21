<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntradaContable extends Model
{
    
    protected $table = 'entradas_contables';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	       'nombre_entrada',
           'descripcion_entrada',
           'maximo_valor_entrada',
    ];
}
