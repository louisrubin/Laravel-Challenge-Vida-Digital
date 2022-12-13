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
        Schema::create('sucursals', function (Blueprint $table) {
            
            $table->bigIncrements('ID_sucursal');
            $table->string('nombre_sucur');
            $table->string('direc_comerc');
            $table->string('telefono');
            $table->string('email');

            $table->bigInteger('ID_empresa1')->unsigned();
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('ID_empresa1')->references('ID_empresa')->on('empresas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursals');
    }
};
