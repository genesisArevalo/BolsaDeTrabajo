<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('nombre',40)->nullable();
            $table->string('app_p',20)->nullable();
            $table->string('app_m',20)->nullable();
            $table->string('sexo',20)->nullable();
            $table->string('colonia')->nullable()->default(null);
            $table->string('tipo_user')->nullable()->default(null);
            $table->integer('edad')->nullable();
            $table->string('municipio')->nullable();
            $table->string('telefono',13);
            $table->string('nacionalidad')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('curp',20)->nullable()->unique();
            $table->string('matricula',10)->nullable()->unique();
            $table->string('edo_civil');
            $table->string('domicilio')->nullable();
            $table->string('pais')->nullable();
            $table->boolean('estatus')->nullable();
            $table->timestamps();
            $table->string('cp');
            $table->string('password',255);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
