<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;

    // Buscamos la tarjeta con su estado

    public static function findByNumero($numero){
        $data =  static::where('tarjetas.numero', $numero)
                        ->first();
        return $data;
    }

    //Obtenemos el estado
    public function estado(){
        return $this->hasOne(EstadosTarjetas::class, 'tarjeta_id');
    }

    //cuenta
    public function cuenta(){
        return $this->belongsTo(Cuenta::class);
    }
}
