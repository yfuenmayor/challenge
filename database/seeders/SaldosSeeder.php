<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Saldo;


class SaldosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Saldo::insert([
        	'operacion_id' => '1',
        	'saldo' => '50000',
        ]);

        Saldo::insert([
        	'operacion_id' => '2',
        	'saldo' => '25000',
        ]);

        Saldo::insert([
        	'operacion_id' => '3',
        	'saldo' => '45000',
        ]);

        Saldo::insert([
        	'operacion_id' => '4',
        	'saldo' => '550000',
        ]);
    }
}
