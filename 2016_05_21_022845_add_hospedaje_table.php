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
        Schema::create('hospedajes', function (Blueprint $table) {
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
            $table->string('tipoCama')->nullable();
            $table->enum('tipoHabitacion',['compartido','privado'])->default('privado');

            //clave foranea, quien lo creo y que tipo de hospedaje es
            $table->integer('usuario_id')->unsigned();
            $table->integer('tipohospedaje_id')->unsigned();
            
            //linkeo a esos ids de afuera
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('tipohospedaje_id')->references('id')->on('tipos_hospedaje')->onDelete('cascade');

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
        Schema::drop('hospedajes');
    }
}
