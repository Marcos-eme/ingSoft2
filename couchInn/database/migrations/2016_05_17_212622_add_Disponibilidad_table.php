<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDisponibilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidad', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');

            $table->integer('hospedaje_id')->unsigned();
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
        Schema::drop('disponibilidad');
    }
}
