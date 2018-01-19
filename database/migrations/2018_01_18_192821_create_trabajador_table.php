<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajador', function (Blueprint $table) {
            $table->increments('idTrabajador');

            $table->string('estatus', 25);
            $table->string('img', 50)->nullable();         
            $table->string('correoElectronico', 50);
            $table->string('contrasenia', 200);
            $table->string('telefono', 13);
            $table->string('calle', 30);
            $table->string('colonia', 30);
            $table->string('numInt', 5);
            $table->string('numExt', 5);
            $table->string('codigoPostal', 5);

            $table->unsignedInteger('idEmpresa');
            $table->foreign('idEmpresa')->references('idEmpresa')->on('empresa');

            $table->unsignedInteger('idPersona');
            $table->foreign('idPersona')->references('idPersona')->on('persona');

            $table->unsignedInteger('idRol');
            $table->foreign('idRol')->references('idRol')->on('rol');

            $table->unsignedInteger('idMunicipio');
            $table->foreign('idMunicipio')->references('idMunicipio')->on('municipio');

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
        Schema::dropIfExists('trabajador');
    }
}
