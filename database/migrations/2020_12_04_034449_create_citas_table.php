<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_doctor');                             
            $table->string('Nombre');
            $table->String('Apellidos');
            $table->unsignedBigInteger('id_usuario');
            $table->string('usuario');
            $table->string('usuariosape');
            $table->string('direccion');
            $table->string('tipo');        
            $table->date('fecha');
            $table->float('costo');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_doctor')->references('id')->on('doctores');
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
        Schema::dropIfExists('citas');
    }
}
