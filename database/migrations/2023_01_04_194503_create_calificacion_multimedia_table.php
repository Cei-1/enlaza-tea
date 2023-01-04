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
        Schema::create('calificacion_multimedia', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_cal')->unique();
            $table->string('calificacion');
            $table->string('comentaio_cal');
            $table->date('fecha_cal');
            $table->bigInteger('id_usuario');

            $table->foreign('id_usuario')->references('id')->on('users');
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
        Schema::dropIfExists('calificacion_multimedia');
    }
};
