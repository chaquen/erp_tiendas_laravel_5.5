<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleEntradaProductosProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dt_productos_proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_id_proveedor')->unsigned();
            $table->foreign('fk_id_proveedor')->references('id')->on('proveedores');
            $table->integer('fk_id_det_inventario')->unsigned();
            $table->foreign('fk_id_det_inventario')->references('id')->on('detalles_inventario');
            $table->integer('cantidad_entrada');
            $table->date('fecha_caducidad');
            $table->string('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dt_productos_proveedores');
    }
}
