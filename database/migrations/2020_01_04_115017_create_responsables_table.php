<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->bigIncrements('id_responsable');
            $table->string('nom_responsable')->nullable();
            $table->string('app_p')->nullable();
            $table->string('app_m');
            $table->string('cargo')->nullable();
            $table->timestamps();
            $table->integer('id_oferta')->unsigned();
    $table->foreign('id_oferta')->references('id_oferta')->on('descripcion_ofertas');
             $table->integer('id_empresa')->unsigned();
    $table->foreign('id_empresa')->references('id_empresa')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables');
    }
}
