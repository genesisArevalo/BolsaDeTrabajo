<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscolaridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolaridad', function (Blueprint $table) {
            $table->bigIncrements('id_escolaridad');
            $table->string('titulo_certificado');
            $table->string('nombre_escuela');
            $table->string('grado_estudio');
            $table->string('idioma');
             $table->integer('id_user')->unsigned();
     $table->foreign('id_user')->references('id_user')->on('users');
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
        Schema::dropIfExists('escolaridad');
    }
}
