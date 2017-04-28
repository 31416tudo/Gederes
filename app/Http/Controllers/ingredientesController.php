<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente;
use App\Platillo;

class ingredientesController extends Controller
{
    public function lista(){
    	$ingredientes = ingrediente::all();
	    return view('paginas/agregarPlatillos')->with('ingredientes',$ingredientes);
    }
    public function listaupdate(){
    	$ingredientes = ingrediente::all();
    	$platillo = platillo::all();
	    return view('paginas/actualizarPlatillo')->with('ingredientes',$ingredientes)
	    										 ->with('platillos',$platillo);
    }
    public function almacen(){
    	$ingredientes = ingrediente::all();
	    return view('paginas/almacen')->with('ingredientes',$ingredientes);
    }
    public function store(Request $request){ //Función STORE, inserta un registro en la base de datos
    //	dd($request);
    	$ingrediente = new ingrediente;
    	$ingrediente->nombreIngrediente = $request->nombreIngrediente;
    	$ingrediente->cantidad = $request->cantidad;
    	$ingrediente->save();
        $ingredientes = ingrediente::all();
    	return view('paginas/almacen')->with('ingredientes',$ingredientes);
    }
    public function update(Request $request){ //Función UPDATE, actualiza un registro en la base de datos
    	//dd($request);
    	$ingrediente = ingrediente::find($request->nombreIngrediente);
    //	$platillo::find(1);
    	$ingrediente->cantidad = $request->cantidad; 
    	$ingrediente->save();
        $ingredientes = ingrediente::all();
    	return view('paginas/almacen')->with('ingredientes',$ingredientes);
    }
}
