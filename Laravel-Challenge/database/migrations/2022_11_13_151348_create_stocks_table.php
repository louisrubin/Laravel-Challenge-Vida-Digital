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
        Schema::create('stocks', function (Blueprint $table) {
            
            $table->bigIncrements('cod_barra');   // PRIMARY KEY
            $table->string('nombre_prod');
            $table->double('precio_venta_unit');
            $table->integer('stock');

            $table->bigInteger('ID_actualizar3')->unsigned();
            $table->bigInteger('ID_sucursal3')->unsigned();
            
            $table->timestamps();   // fecha-hora

            // FOREIGN KEY
            $table->foreign('ID_actualizar3')->references('ID_actualizar')->on('actualizar_stocks')->onDelete('cascade');
            $table->foreign('ID_sucursal3')->references('ID_sucursal')->on('sucursals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
};
