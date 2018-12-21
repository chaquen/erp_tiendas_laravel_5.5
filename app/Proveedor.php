<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	         'nombre_proveedor',
           'nit',
           'nombre_contacto_proveedor',
           'telefono_contacto_proveedor',
           'direccion_contacto_proveedor',
           'email_contacto_proveedor',
    ];
}
