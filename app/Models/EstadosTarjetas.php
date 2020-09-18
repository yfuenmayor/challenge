<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadosTarjetas extends Model
{
    use HasFactory;
    protected $table = 'estados_tarjetas';

    //Verificamos si esta activa
    public function activa()
    {
    	return $this->estado_id == 1;
    }

}
