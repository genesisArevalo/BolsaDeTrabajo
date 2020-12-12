<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciaLaboralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_laboral', function (Blueprint $table) {
            $table->bigIncrements('id_experiencia');
            $table->boolean('solicitud_info')->nullable();
            $table->longText('justificacion');
            $table->string('ultimo_puesto')->nullable();
            $table->string('sueldo_mensual');
            $table->string('domicilio_empresa');
            $table->string('telefono_empresa')->nullable();
            $table->string('nom_empresa')->nullable();
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
        Schema::dropIfExists('experiencia_laboral');
    }
}
