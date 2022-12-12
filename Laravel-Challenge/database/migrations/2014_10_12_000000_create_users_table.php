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
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('ID_empleado');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('domicilio');
            $table->integer('telefono')->unique();
            $table->bigInteger('ID_sucursal1')->unsigned(); // ->unsigned();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('ID_sucursal1')->references('ID_sucursal')->on('sucursals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
