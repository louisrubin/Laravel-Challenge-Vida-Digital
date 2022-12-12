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
        Schema::create('actualizar_stocks', function (Blueprint $table) {
        
            $table->bigIncrements('ID_actualizar');
            $table->bigInteger('ID_encargo1')->unsigned();
            
            $table->timestamps();   // fecha-hora

            // FOREIGN KEY
            $table->foreign('ID_encargo1')->references('ID_encargo')->on('encargo_provees')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actualizar_stocks');
    }
};
