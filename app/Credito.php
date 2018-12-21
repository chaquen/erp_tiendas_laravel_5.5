<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    //
    protected $fillable=[
    						'fk_id_cliente',
    						'fk_id_factura',
    						'estado_credito',
    						'valor_credito',
    						'valor_actual_credito'
						];
}
