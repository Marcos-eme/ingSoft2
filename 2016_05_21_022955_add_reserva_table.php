<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');

            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->enum('estado',['Aceptada','Rechazada','Pendiente','Finalizada','SinNotificar']);
            //quien la hace y a donde se hace
            $table->integer('usuario_id')->unsigned();
            $table->integer('hospedaje_id')->unsigned();
            //linkeo de tablas
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('hospedaje_id')->references('id')->on('hospedajes')->onDelete('cascade');
      
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
        Schema::drop('reservas');
    }
}
