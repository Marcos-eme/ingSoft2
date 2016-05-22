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
            $table->boolean('wifi')->default(false);
            $table->boolean('cable')->default(false);
            $table->integer('baños')->nullable();
            $table->integer('habitaciones')->nullable();
            $table->string('tipo_cama')->nullable();
            $table->enum('tipo_habitacion',['compartido','privado'])->default('privado');


            $table->integer('usuario_id')->unsigned();
            $table->integer('tipo_hospedaje_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('tipo_hospedaje_id')->references('id')->on('tipo_hospedaje')->onDelete('cascade');
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
