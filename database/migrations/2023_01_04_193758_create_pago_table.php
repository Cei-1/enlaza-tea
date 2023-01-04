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
        Schema::create('pago', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_pago')->unique();
            $table->integer('subtotal_pago');
            $table->float('total_pago');
            $table->integer('iva_pago');
            $table->date('fecha_pago');
            $table->bigInteger('id_especialista');
            $table->bigInteger('id_suscripcion');
            $table->bigInteger('id_tcd');

            $table->foreign('id_especialista')->references('id')->on('datos_especialista');
            $table->foreign('id_suscripcion')->references('id')->on('suscripcion');
            $table->foreign('id_tcd')->references('id')->on('tcd');
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
        Schema::dropIfExists('pago');
    }
};
