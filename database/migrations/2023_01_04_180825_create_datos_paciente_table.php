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
        Schema::create('datos_paciente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_pac');
            $table->string('ap_paterno_pac');
            $table->string('ap_materno_pac');
            $table->string('parentesco_pac');
            $table->string('nivel_tea_pac');
            $table->string('sexo_pac');
            $table->integer('edad_pac');
            $table->string('calle_pac');
            $table->string('num_int_pac');
            $table->string('num_ext_pac');
            $table->string('colonia_pac');
            $table->string('municipio_pac');
            $table->string('estado_pac');
            $table->integer('cp_pac');
            $table->string('escolaridad_pac');
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
        Schema::dropIfExists('datos_paciente');
    }
};
