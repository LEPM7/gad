<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActividadUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_usuario', function (Blueprint $table) {
            $table->increments('actividad_usuario');
            $table->integer('actividad')->unsigned();
            $table->integer('usuario')->unsigned();

            //foreign
            $table->foreign('actividad')->references('actividad')->on('actividad')->onDelete('cascade');
            $table->foreign('usuario')->references('usuario')->on('usuario')->onDelete('cascade');




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
        Schema::drop('actividad_usuario');
    }
}
