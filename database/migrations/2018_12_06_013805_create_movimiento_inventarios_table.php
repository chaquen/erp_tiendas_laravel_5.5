<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos_inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_id_detalle_inventario')->unsigned();
            $table->foreign('fk_id_detalle_inventario')->references('id')->on('detalles_inventario');
            $table->integer('habia');
            $table->enum('descripcion',['caja', 'blister', 'unidad', 'n/a']);
            $table->enum('tipo',['SALIDA','ENTRADA','AJUSTE','DEVOLUCION','EDICION']);
            $table->integer('fk_id_usuario')->unsigned();
            $table->foreign('fk_id_usuario')->references('id')->on('users');
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
        Schema::dropIfExists('movimientos_inventarios');
    }
}
