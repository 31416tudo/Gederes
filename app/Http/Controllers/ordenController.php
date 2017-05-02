<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orden;
use App\DetallesOrden;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ordenController extends Controller
{
	public function muestradetalles(){
    	$detallesorden = detalles_orden::all();
	    return view('paginas/Chef')->with('detallesorden', $detallesorden);
    }
    public function muestraordenes(){
    	$orden = orden::all();
    	$detallesorden = detallesorden::all();
	    return view('paginas/Chef')->with('orden', $orden)->with('detallesorden', $detallesorden);
    }
    public function muestraordenescaja(){
        $orden = orden::all();
        $detallesorden = detallesorden::all();
        return view('paginas/caja')->with('orden', $orden)->with('detallesorden', $detallesorden);
    }
   public function updateorden(Request $request){ //Función UPDATE, actualiza un registro en la base de datos
    	$orden = orden::find($request->id_orden);
    	$orden->estatus = $request->estatus;
    	$orden->save();
    	$orden = orden::all();
    	$detallesorden = detallesorden::all();
	    return redirect()->back()->with('orden', $orden)->with('detallesorden', $detallesorden);
    }
     public function ordenpagada(Request $request){ //Función UPDATE, actualiza un registro en la base de datos
        $orden = orden::find($request->id_orden);
        $orden->estatus = $request->estatus;
        $orden->save();
        $orden = orden::all();
        $detallesorden = detallesorden::all();
        return redirect()->back()->with('orden', $orden)->with('detallesorden', $detallesorden);
    }


    public function crearorden(Request $request){
        $monto=0;
    	$orden = new orden;
        $orden->estatus ='1';
    	$orden->comentarios = $request->comentarios;
    	$orden->cliente = Auth::id();
        $arrayorden = Input::get('ordenes');
        foreach($arrayorden as $nombreplatillo){
            $total = DB::table('platillo')->select('precio')->where('nombrePlatillo','=',$nombreplatillo)->get();
            foreach($total as $precio){
            $monto = $monto + $precio->precio;
        }
        }
        $orden->monto = $monto;
        $orden->save();
        foreach ($arrayorden as $nombreplato) {
            $detallesorden = new DetallesOrden;
            $detallesorden->platillo = $nombreplato;
            $detallesorden->id_orden=$orden->id_orden;
            $detallesorden->save();
        }
        return view('welcome');
    }
}
