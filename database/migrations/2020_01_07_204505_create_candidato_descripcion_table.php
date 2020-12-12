<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatoDescripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_descripcion', function (Blueprint $table) {
     $table->bigIncrements('id');
     $table->integer('id_oferta')->unsigned();
     $table->foreign('id_oferta')->references('id_oferta')->on('descripcion_ofertas');
        $table->integer('id_candidato')->unsigned();
         $table->foreign('id_candidato')->references('id_candidato')->on('candidatos');

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
        Schema::dropIfExists('candidato_descripcion');
    }
}
