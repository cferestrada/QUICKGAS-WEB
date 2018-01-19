<?php

use App\Models\Trabajador;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrabajadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Trabajador::create([
            'estatus'=> '1',
           'img'=> 'URLFotoDeEmpleado',
           'correoElectronico'=> 'quick@gmail.com',
           'contrasenia'=> bcrypt('12345678'),
           'telefono'=> '12345678',
           'calle'=> 'loarca',
           'colonia'=> 'las lomas',
           'numInt'=> '22',
           'numExt'=> '42',
           'codigoPostal'=> '45789',
           'idEmpresa'=> DB::table('empresa') ->whereNombre('QuickGas')->value('idEmpresa'),
           'idPersona'=> DB::table('persona') ->whereNombres('Juan Francisco Jose')->value('idPersona'),
           'idRol'=> DB::table('rol') ->whereRol('Administrador')->value('idRol'),
           'idMunicipio'=> DB::table('municipio') ->whereMunicipio('Queretaro')->value('idMunicipio')
       ]); 

    }
}
