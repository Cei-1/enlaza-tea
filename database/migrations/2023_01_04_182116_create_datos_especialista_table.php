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
        Schema::create('datos_especialista', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_esp');
            $table->string('ap_paterno_esp');
            $table->string('ap_materno_esp');
            $table->date('f_nacimiento_esp');
            $table->string('especialidad_esp');
            $table->string('sexo_esp');
            $table->string('calle_esp');
            $table->string('num_int_esp');
            $table->string('num_ext_esp');
            $table->string('colonia_esp');
            $table->string('municipio_esp');
            $table->string('estado_esp');
            $table->string('cp_esp');
            $table->string('telefono_esp');
            $table->string('url_imagen_esp');
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_curriculum');
            $table->bigInteger('id_cedula');

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_curriculum')->references('id')->on('curriculum');
            $table->foreign('id_cedula')->references('id')->on('cedula');

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
        Schema::dropIfExists('datos_especialista');
    }
};
