<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursal', function (Blueprint $table) {
            $table->increments('idSucursal');

            $table->string('nombre', 100);
            $table->string('estatus', 11);         
            $table->string('razonSocial', 100);    
            $table->string('rfc', 14);
            $table->string('img', 100);
            $table->string('calle', 30);
            $table->string('colonia', 30);
            $table->string('numInt', 5);
            $table->string('numExt', 5);
            $table->string('codigoPostal', 5);

            $table->unsignedInteger('idMunicipio');
            $table->foreign('idMunicipio')->references('idMunicipio')->on('municipio');

            $table->unsignedInteger('idEmpresa');
            $table->foreign('idEmpresa')->references('idEmpresa')->on('empresa');

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
        Schema::dropIfExists('sucursal');
    }
}
