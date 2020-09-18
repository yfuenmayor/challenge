<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Tarjeta,Cuenta,Operacion,Saldo,EstadosTarjetas};


class OperacionesController extends Controller
{
    public function index($id)
    {
    	$tarjeta = Tarjeta::find($id);
    	return view('operaciones.operaciones', compact('tarjeta'));
    	return $tarjeta;
    }

    public function balance($id)
    {
        // Buscamos las collecciones de datos segun numero de tarjeta
        // Datos de tarjeta
        $data['tarjeta'] = Tarjeta::find($id);
        // Datos de la ulima operacion (plus)
        $data['operacion'] = Operacion::where('tarjeta_id',$data['tarjeta']->id)->get()->last();
        //Datos del tipo de operacion
        $data['operacion']->tipo;
        // Datos del saldo actual
        $data['saldo'] = $data['operacion']->saldo;

    	return view('operaciones.balance', compact('data'));
    }

    public function retiro($id)
    {
    	$tarjeta = Tarjeta::find($id);
    	return view('operaciones.retiro', compact('tarjeta'));
    }

    public function setRetiro(Request $request)
    {
        // Form Validation
        request()->validate([
            'Monto' => 'required'
        ]);

        // Buscamos las collecciones de datos segun numero de tarjeta
        // Datos de tarjeta
        $tarjeta = Tarjeta::find($request->Id);
        // Datos de la ulima operacion
        $operacion = Operacion::where('tarjeta_id',$request->Id)->get()->last();
        // Datos del saldo actual
        $saldo = $operacion->saldo;

        if ($saldo->saldo > floatval($request->Monto)) {

            $balance = $saldo->saldo - floatval($request->Monto);

            $newOp = new Operacion;
            $newOp->cuenta_id = $tarjeta->cuenta_id;
            $newOp->tarjeta_id = $tarjeta->id;
            $newOp->tipoOperacion_id = 2;
            $newOp->monto = $request->Monto;
            $newOp->codigo = 34823402934;
            $newOp->save();

            if (  $newOp->isClean()) {
                $newSaldo = new Saldo;
                $newSaldo->operacion_id = $newOp->id;
                $newSaldo->saldo =  $balance;
                $newSaldo->save();

                if ($newOp->isClean()) {
                    return redirect('reporte/'.$tarjeta->id);
                }
            }

            // Operacion::createOperacion($data,$data2);


        }else {
            return 'No hay dinero';
        }

    }

    public function reporte($id)
    {
        //Datos de la tarjeta
        $data['tarjeta'] = Tarjeta::find($id);
        // Datos de la ulima operacion
        $data['operacion'] = Operacion::where('tarjeta_id',$id)->get()->last();

        return view('operaciones.reporte', compact('data'));
    }

    public function bloqueo($id)
    {
        //Buscamos datos de la tarjeta
        $tarjeta = Tarjeta::find($id)->estado;
        //Cambiamos el estado de la misma en la base de datos
        $tarjeta->estado_id = 2;
        $tarjeta->save();

        if ($tarjeta->isClean()) {
            return view('base.alerta', compact('tarjeta'));
        }
    }


}
