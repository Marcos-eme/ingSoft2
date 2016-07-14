<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta', function (Blueprint $table) {
            $table->increments('id');
            $table->text('respuesta');
            $table->integer('pregunta_id')->unsigned();

            $table->integer('usuario_id')->unsigned();
            $table->boolean('baja_logica')->default(FALSE);

            $table->foreign('pregunta_id')->references('id')->on('pregunta')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
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
        Schema::drop('respuesta');
    }
}
