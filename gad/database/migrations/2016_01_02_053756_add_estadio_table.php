<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstadioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadio', function (Blueprint $table) {
            $table->increments('estadio');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('direccion');
            $table->string('contacto');
            $table->string('telefono');
            $table->double('latitud');
            $table->double('longitud');
            $table->integer('capacidad');
            $table->boolean('ocupado');
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
        Schema::drop('estadio');
    }
}
