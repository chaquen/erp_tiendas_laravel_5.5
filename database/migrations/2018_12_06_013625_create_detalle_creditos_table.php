<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_creditos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_id_credito')->unsigned();
            $table->foreign('fk_id_credito')->references('id')->on('creditos');
            $table->string('observacion');
            $table->decimal('abono',10,2);
            $table->datetime('fecha_abono');
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
        Schema::dropIfExists('detalle_creditos');
    }
}
