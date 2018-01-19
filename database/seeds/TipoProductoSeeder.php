<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoproducto')->insert([
            'tipoProducto'=> 'Tanque',
        ]); 
        DB::table('tipoproducto')->insert([
            'tipoProducto'=> 'Estacionario',
        ]); 
    }
}
