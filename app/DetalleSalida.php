<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleSalida extends Model
{
    //
    protected $filable=['fk_id_salida_contable',
    					'fk_id_usuario',
    					'fk_id_sede',
    					'valor_salida'];
}
