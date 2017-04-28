<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orden;
use App\detallesorden;
use Auth;

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
   public function updateorden(Request $request){ //Función UPDATE, actualiza un registro en la base de datos
    	$orden = orden::find($request->id_orden);
    	$orden->estatus = $request->estatus;
    	$orden->save();
    	$orden = orden::all();
    	$detallesorden = detallesorden::all();
	    return redirect()->back()->with('orden', $orden)->with('detallesorden', $detallesorden);
    }
    public function crearorden(Request $request){
    	$orden = new orden;
        $orden->estatus ='1';
    	$orden->comentarios = $request->comentarios;
    	$orden->cliente = Auth::id();
    	$orden->save();
        return view('welcome');
    	
    }
}
