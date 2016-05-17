<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        //muchos a muchos articles y tags!

        Schema::create('article_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hospedaje_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->foreign('hospedaje_id')->references('id')->on('hospedajes');
            $table->foreign('tag_id')->references('id')->on('tags');


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
        Schema::drop('tags');
    }
}
