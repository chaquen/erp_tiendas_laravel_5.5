<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCajerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_cajeros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_id_usuario')->unsigned();
            $table->integer('fk_id_sede')->unsigned();
            $table->enum('tipo',['administrador','cajero','domiciliario']);
            $table->enum('estado',['0','1'])->default('0');
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
        Schema::dropIfExists('detalle_cajeros');
    }
}
