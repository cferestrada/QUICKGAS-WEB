<?php

use App\Models\Estado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create([
            'estado'=> 'Queretaro',
            'idPais'=> DB::table('pais') ->wherePais('Mexico')->value('idPais')
        ]);

    }
}
