<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('usuario');
            $table->string('nickname');
            $table->string('password');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->dateTime('fecha_nacimiento');
            $table->string('dpi');
            $table->string('direccion');
            $table->boolean('activo');
            $table->string('rol');
            $table->rememberToken();
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
        Schema::drop('usuario');
    }
}
