<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;
use App\Models\EstadosTarjetas;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Estado::insert([
        	'nombre' => 'Activa',
        	'estado' => '1',
        ]);

        Estado::insert([
        	'nombre' => 'Bloqueada',
        	'estado' => '0',
        ]);

        EstadosTarjetas::insert([
        	'tarjeta_id' => '1',
        	'estado_id' => '1',
        ]);

        EstadosTarjetas::insert([
        	'tarjeta_id' => '2',
        	'estado_id' => '2',
        ]);

        EstadosTarjetas::insert([
        	'tarjeta_id' => '3',
        	'estado_id' => '1',
        ]);

        EstadosTarjetas::insert([
        	'tarjeta_id' => '4',
        	'estado_id' => '1',
        ]);

    }
}
