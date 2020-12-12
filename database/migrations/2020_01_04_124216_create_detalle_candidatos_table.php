<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_candidatos', function (Blueprint $table) {
            $table->bigIncrements('id_detall_candidato');
            $table->integer('id_candidato')->unsigned();
        $table->foreign('id_candidato')->references('id_candidato')->on('candidatos');
            $table->integer('id_experiencia')->unsigned();
            $table->foreign('id_experiencia')->references('id_experiencia')->on('experiencia_laboral');

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
        Schema::dropIfExists('detalle_candidatos');
    }
}
