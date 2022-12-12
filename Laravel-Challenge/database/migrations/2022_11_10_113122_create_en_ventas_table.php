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
        Schema::create('en_ventas', function (Blueprint $table) {
            
            $table->bigInteger('vent_cod_barra')->unsigned();
            $table->bigInteger('vent_ID_empresa')->unsigned();

            $table->timestamps();   // fecha-hora

            // FOREIGN KEY
            $table->foreign('vent_cod_barra')->references('cod_barra')->on('productos')->onDelete('cascade');
            $table->foreign('vent_ID_empresa')->references('ID_empresa')->on('empresas')->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_ventas');
    }
};
