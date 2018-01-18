<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->increments('idVehiculo');
            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->float('capacidad', 8, 2);
            $table->string('estatus', 11);

            $table->unsignedInteger('idSucursal');
            $table->foreign('idSucursal')->references('idSucursal')->on('sucursal');
            $table->unsignedInteger('idTrabajador');
            $table->foreign('idTrabajador')->references('idTrabajador')->on('trabajador');
            $table->unsignedInteger('idTipoProducto');
            $table->foreign('idTipoProducto')->references('idTipoProducto')->on('tipoproducto');

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
        Schema::dropIfExists('vehiculo');
    }
}
