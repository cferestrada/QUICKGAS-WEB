<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ProductoId = DB::table('tipoproducto')
        ->where('tipoProducto', 'Tanque')
        ->value('idTipoProducto');

        DB::table('vehiculo')->insert([
            'marca'=> 'Ford',
            'modelo'=> 'AS57',
            'capacidad'=> '5000.5',
            'estatus'=> '1',
            'idSucursal'=> DB::table('sucursal') ->whereNombre('QuickGas Qro')->value('idSucursal'),
            'idTrabajador'=> DB::table('trabajador') ->whereImg('URLFotoDeEmpleado')->value('idTrabajador'),
            'idTipoProducto'=> $ProductoId
        ]); 
    }
}
