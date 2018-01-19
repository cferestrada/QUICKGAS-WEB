<?php

use App\Models\Pais;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create([
            'pais'=> 'Mexico',
            'img'=> 'Bandera!!',
        ]);

    }
}
