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
        Schema::create('encargo_provees', function (Blueprint $table) {
            
            $table->bigIncrements('ID_encargo');   // ID

            $table->bigInteger('vent_cod_barra2')->unsigned();     // FK
            $table->bigInteger('vent_ID_empresa2')->unsigned();     // FK
            $table->bigInteger('ID_empleado2')->unsigned();     // FK

            $table->string('nombre_prod');
            $table->integer('cant_bultos');
            $table->integer('unid_x_bultos');
            $table->double('precio_bulto');
            $table->double('monto_total');
            
            $table->timestamps();   // fecha-hora

            // FOREIGN KEY
            $table->foreign('vent_cod_barra2')->references('vent_cod_barra')->on('en_ventas')->onDelete('cascade');
            $table->foreign('vent_ID_empresa2')->references('vent_ID_empresa')->on('en_ventas')->onDelete('cascade');
            $table->foreign('ID_empleado2')->references('ID_empleado')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encargo_provees');
    }
};
