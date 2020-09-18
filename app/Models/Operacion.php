<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Operacion extends Model
{
    use HasFactory;
    protected $table = 'operaciones';
    protected $fillable = ['cuenta_id'];


    //Obtenemos el estado
    public function saldo(){
        return $this->hasOne(Saldo::class, 'operacion_id');
    }

    //Obtenemos el tipo de operacion
    public function tipo(){
        return $this->belongsTo(TiposOperaciones::class, 'tipoOperacion_id');
    }

    // public static function createOperacion($operacion, $saldo)
    // {

    // 	DB::transaction(function () use($operacion, $saldo){
    //         $operacion = Operacion::create($operacion);
    //         $operacion->saldo()->create($saldo);
    //     });
    // }


}
