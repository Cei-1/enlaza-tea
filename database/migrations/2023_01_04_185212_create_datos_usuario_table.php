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
        Schema::create('datos_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->integer('telefono');
            $table->date('f_nacimiento');
            $table->string('url_imagen');
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_paciente');

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_paciente')->references('id')->on('datos_paciente');

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
        Schema::dropIfExists('datos_usuario');
    }
};
