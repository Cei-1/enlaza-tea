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
        Schema::create('publicacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_publi');
            $table->integer('titulo_publi');
            $table->float('descripcion_publi');
            $table->integer('url_imagen_publi');
            $table->integer('fecha_publi');
            $table->bigInteger('id_especialista');

            $table->foreign('id_especialista')->references('id')->on('datos_especialista');
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
        Schema::dropIfExists('publicacion');
    }
};
