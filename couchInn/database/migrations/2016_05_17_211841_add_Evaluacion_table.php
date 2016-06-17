<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comentario')->nullable();
            $table->boolean('baja_logica')->default(FALSE);
            $table->integer('puntuacion');

            $table->integer('usuario_id')->unsigned();
            $table->integer('hospedaje_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('hospedaje_id')->references('id')->on('hospedaje')->onDelete('cascade');
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
        Schema::drop('evaluacion');
    }
}
