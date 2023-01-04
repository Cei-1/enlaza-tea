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
        Schema::create('categoria_multimedia', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_cat')->unique();
            $table->string('nombre_cat');
            $table->string('descripcion_cat');
            $table->date('fecha_cat');
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
        Schema::dropIfExists('categoria_multimedia');
    }
};
