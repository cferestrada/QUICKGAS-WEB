<?php

use App\Models\Persona;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'apePat'=> 'Sanchez',
            'apeMat'=> 'Gonzalez',
            'nombres'=> 'Juan Francisco Jose',
            'fechaNacimiento'=> '1958-01-26',
        ]);

    }
}
