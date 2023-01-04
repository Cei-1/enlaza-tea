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
        Schema::create('cita', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_cita')->unique();
            $table->date('fecha_cita');
            $table->string('horario_cita');
            $table->string('estatus_cita');
            $table->bigInteger('id_especialista');
            $table->bigInteger('id_paciente');

            $table->foreign('id_especialista')->references('id')->on('datos_especialista');
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
        Schema::dropIfExists('cita');
    }
};
