<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursal')->insert([
                   'nombre'=> 'QuickGas Qro',
                   'estatus'=> '1',
                   'razonSocial'=> 'QuickGas Qro SA.CV.',
                   'rfc'=> 'LOCD4715966V4',
                   'img'=> 'QuickGas Qro',
                   'calle'=> 'Loma de Zamorano',
                   'colonia'=> 'Loma Dorada',
                   'numInt'=> '50A',
                   'numExt'=> '150',
                   'codigoPostal'=> '76150',
                   'idMunicipio'=> DB::table('municipio') ->whereMunicipio('Queretaro')->value('idMunicipio'),
                   'idEmpresa'=> DB::table('empresa') ->whereNombre('QuickGas')->value('idEmpresa')
               ]); 
        //
    }
}
