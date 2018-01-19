<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $this->truncateTables([
            'rol',
            'empresa',
            'sucursal',
            'pais',
            'estado',
            'municipio',
            'persona',
            'tipoproducto',
            'trabajador',
            'vehiculo',
        ]);*/
       

        // $this->call(UsersTableSeeder::class);

    
        $this->call(RolSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(TipoProductoSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(SucursalSeeder::class);
        
        $this->call(TrabajadorSeeder::class);
        $this->call(VehiculoSeeder::class);
        
    }
   
   /* public function truncateTables(array $tables) {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
 
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
 
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }*/
}
