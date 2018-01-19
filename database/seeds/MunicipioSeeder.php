<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insertar FK
        //$idEstado = DB::select('SELECT idEstado' FROM estado WHERE estado = 'Queretaro' );

        //$idEstado = DB::table('idEstado')->select('idEstado')->take(1)->get();

       // $idEstado = DB::table('idEstado')->select('idEstado')->first();
       
        //dd($idEstado;)


        //DB::imsert('INSERT INTO municipio(muniicipio) VALUES (:municipio)', ['municipio']  => 'Queretaro');
        DB::table('municipio')->insert([
            'municipio'=> 'Queretaro',
            'idEstado'=> DB::table('estado') ->whereEstado('Queretaro')->value('idEstado')
        ]); 
    }
}
