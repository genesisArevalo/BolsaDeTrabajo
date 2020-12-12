<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescripcionOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcion_ofertas', function (Blueprint $table) {
            $table->bigIncrements('id_oferta');
            $table->string('perfil_academico');
            $table->string('cargo');
            $table->string('descripcion')->nullable();
            $table->string('horario')->nullable();
            $table->string('turno');
            $table->string('salario')->nullable();
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
        Schema::dropIfExists('descripcion_ofertas');
    }
}
