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
        Schema::create('multimedia', function (Blueprint $table) {
            $table->id();
            $table->string('url_mult');
            $table->integer('titulo_mult');
            $table->float('descripcion_mult');
            $table->integer('fecha_mult');
            $table->bigInteger('id_especialista');
            $table->bigInteger('id_categoria');
            $table->bigInteger('id_calificacion');

            $table->foreign('id_especialista')->references('id')->on('datos_especialista');
            $table->foreign('id_categoria')->references('id')->on('categoria_multimedia');
            $table->foreign('id_calificacion')->references('id')->on('calificacion_multimedia');
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
        Schema::dropIfExists('multimedia');
    }
};
