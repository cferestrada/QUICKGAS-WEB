<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // DB::table('rol')->truncate();
        
        DB::table('rol')->insert([
            'rol'=> 'Administrador',
        ]); 
        DB::table('rol')->insert([
            'rol'=> 'Cliente',
        ]); 
        DB::table('rol')->insert([
            'rol'=> 'Empleado',
        ]);
    }
}
