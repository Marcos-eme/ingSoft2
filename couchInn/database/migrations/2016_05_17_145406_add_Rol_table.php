<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rol')->unique();
            $table->boolean('baja_logica')->default(FALSE);
            
            $table->timestamps();
        });
        
        /*
        Schema::create('rol_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rol_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rol');
    }
}
