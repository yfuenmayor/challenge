<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cuenta;


class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuenta::insert([
        	'nombre' => 'Antonio',
        	'apellido' => 'Perez'
        ]);

        Cuenta::insert([
        	'nombre' => 'Julieta',
        	'apellido' => 'Ferrer'
        ]);

        Cuenta::insert([
        	'nombre' => 'Facundo',
        	'apellido' => 'Passarelli'
        ]);

        Cuenta::insert([
        	'nombre' => 'Eduardo',
        	'apellido' => 'Rufino'
        ]);
    }
}
