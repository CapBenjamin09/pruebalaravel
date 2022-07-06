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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('primerNombre',50);
            $table->string('segundoNombre',50);
            $table->string('primerApellido',50);
            $table->string('segundoApellido',50);
            $table->string('apellidoCasada',50);
            $table->dateTime('birthDay', $precision = 0);
            $table->string('dpi',20);
            $table->string('profesion',30)->default('');
            $table->string('foto',200);
            $table->integer('aniosLaborando')->default(0);
            $table->float('salario')->default(0);
            $table->string('mail');
            $table->string('password');
            $table->string('solicitud')->default('pendiente');
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
        Schema::dropIfExists('usuarios');
    }
};
