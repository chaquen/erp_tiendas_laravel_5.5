<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalidaContable extends Model
{
    protected $table = 'salidas_contables';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	       'nombre_salida',
           'descripcion_salida',
           'maximo_valor_salida',
    ];
}
