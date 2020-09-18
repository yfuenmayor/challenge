<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarjeta;

class TarjetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarjeta::insert([
        	'numero' => '1111222233334444',
        	'pin' => '1234',
        	'cuenta_id' => '1',
        	'fechaVencimiento' => '2025-09-18 12:00:00'
        ]);

        Tarjeta::insert([
        	'numero' => '2222333344445555',
        	'pin' => '5678',
        	'cuenta_id' => '2',
        	'fechaVencimiento' => '2021-03-01 12:00:00'
        ]);

        Tarjeta::insert([
        	'numero' => '1111444422225555',
        	'pin' => '1111',
        	'cuenta_id' => '3',
        	'fechaVencimiento' => '2023-10-01 12:00:00'
        ]);

        Tarjeta::insert([
        	'numero' => '9999888877776666',
        	'pin' => '4321',
        	'cuenta_id' => '4',
        	'fechaVencimiento' => '2024-01-10 12:00:00'
        ]);
    }
}
