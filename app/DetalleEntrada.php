<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleEntrada extends Model
{
    //
    protected $filable =[
    				'fk_id_entrada_contable',
    				'fk_id_usuario',
    				'fk_id_sede',
    				'valor_entrada'
    		];
}
