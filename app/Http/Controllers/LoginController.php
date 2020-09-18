<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarjeta;


class LoginController extends Controller
{

    public function tarjeta(Request $request)
    {
    	// Form Validation
    	request()->validate([
    		'Tarjeta' => 'required|size:19'
    	]);

    	// Limpiamos los datos para la busqueda
    	$numero = str_replace('-', '', $request->Tarjeta);

    	// Buscamos la colleccion segun numero de tarjeta
        $tarjeta = Tarjeta::findByNumero($numero);
    	//Condicionamos segun los requerimientos
    	switch (true):
    		case ($tarjeta !== null):
                //consultamos su estado
                //Verificamos si esta bloqueada
	    			if ($tarjeta->estado->activa()) {
	    				return redirect('pin/'.$tarjeta->id);
	    			}else{
	    				return view('base.errores', compact('tarjeta'));
	    			}
    			break;

    		default:
    				return view('base.errores', compact('tarjeta'));
    			break;
    	endswitch;

    }//Fin Tarjeta Validacion

    public function pin($id)
    {
    	$tarjeta = Tarjeta::find($id);
	    $tarjeta->contador = 0;
	    return view('pin', compact('tarjeta'));
    }

    public function validacionpin(Request $request)
    {
    	//Validacion del pin a nivel de servidor
    	request()->validate([
    		'Pin' => 'required|size:4'
    	]);

    	//pedimos el pin verdadero al DB
    	$tarjeta = Tarjeta::find($request->Id);

    	//condicionamos el ingreso del pin
    	if ($request->Pin === $tarjeta->pin) {
    			//Enviamos a operaciones
	    		return redirect('operaciones/'.$tarjeta->id);
    	}else{
    		if ($request->Contador < 3) {
    			//retornamos al pin
    			$tarjeta->contador = $request->Contador + 1;
	    		return view('pin', compact('tarjeta'));
    		}elseif($request->Contador = 3){
    			//enviamos a operaciones bloqueo
    			return redirect('bloqueo/'.$request->Id);
    		}
    	}

    }

}
