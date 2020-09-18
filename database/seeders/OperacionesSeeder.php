<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Operacion;


class OperacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Operacion::insert([
        	'cuenta_id' => '1',
        	'tarjeta_id' => '1',
        	'tipoOperacion_id' => '1',
        	'monto' => '50000',
        	'codigo' => '2345324675'
        ]);

        Operacion::insert([
        	'cuenta_id' => '2',
        	'tarjeta_id' => '2',
        	'tipoOperacion_id' => '1',
        	'monto' => '25000',
        	'codigo' => '8874345253'
        ]);

        Operacion::insert([
        	'cuenta_id' => '3',
        	'tarjeta_id' => '3',
        	'tipoOperacion_id' => '1',
        	'monto' => '45000',
        	'codigo' => '9878324325'
        ]);

        Operacion::insert([
        	'cuenta_id' => '4',
        	'tarjeta_id' => '4',
        	'tipoOperacion_id' => '1',
        	'monto' => '550000',
        	'codigo' => '8549035007'
        ]);

    }
}
