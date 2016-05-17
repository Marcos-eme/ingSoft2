<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHospedajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedaje', function (Blueprint $table) {
            $table->increments('id');

            $table->string('provincia');
            $table->string('ciudad');
            $table->string('calle');
            $table->integer('numero');
            $table->integer('capacidad');
            $table->text('descripcion');
            //no obligatorios
            $table->boolean('wifi');
            $table->boolean('cable');
            $table->integer('baños');
            $table->integer('habitaciones');
            $table->string('tipoCama');
            $table->enum('tipoHabitacion',['compartido','privado'])->default('privado');


            $table->integer('usuario_id')->unsigned();
            $table->integer('tipoHospedaje_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('tipoHospedaje_id')->references('id')->on('tipoHospedaje')->onDelete('cascade');
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
        Schema::drop('hospedaje');
    }
}
