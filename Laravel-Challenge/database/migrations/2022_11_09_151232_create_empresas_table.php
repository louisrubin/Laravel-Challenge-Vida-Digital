<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {

            // $table->engine="InnoDB"; // permite borrar las tablas vacias relacionadas en cascada

            $table->bigIncrements('ID_empresa');
            $table->string('nombre');
            $table->string('direc_comerc');
            $table->date('inicio_activ');
            $table->integer('telefono');
            $table->string('email');

            $table->timestamps();   // fecha-hora
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
};
