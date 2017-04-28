<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Platillo;
use App\Ingrediente;
use App\Detallesplato;
use Illuminate\Support\Facades\Input;

class platilloController extends Controller
{
    public function store(Request $request){
    	$platillo = new platillo;
    	$platillo->nombrePlatillo = $request->nombrePlatillo;
    	$platillo->descripcion = $request->descripcion;
    	$platillo->tipo = $request->tipo;
    	$platillo->precio = $request->precio;
    	$platillo->imagen = $request->imagen;
    	$platillo->save();
        $arraydetalles = Input::get('ingredientes');
        foreach ($arraydetalles as $nombreingrediente) {
            $detallesplato = new detallesplato;
            $detallesplato->platillo = $request->nombrePlatillo;
            $detallesplato->ingredientes=$nombreingrediente;
            $detallesplato->save();
        }
        $platillo = platillo::all();
        $ingredientes = ingrediente::all();
    	return view('paginas/menu')->with('platillos',$platillo)->with('ingredientes',$ingredientes);
        
    }   
    public function update(Request $request){
    	$platillo = platillo::find($request->nombrePlatillo);
    	$platillo->descripcion = $request->descripcion;
    	$platillo->tipo = $request->tipo;
    	$platillo->precio = $request->precio;
    	$platillo->imagen = $request->imagen; 
    	$platillo->save();
        $platillo = platillo::all();
        $ingredientes = ingrediente::all();
    	return view('paginas/menu')->with('platillos',$platillo)->with('ingredientes',$ingredientes);
    }
    public function delete(Request $request){ 
    	$platillo = platillo::find($request->nombrePlatillo);
    	$platillo->delete();
        $platillo = platillo::all();
    	return view('paginas/menu')->with('platillos',$platillo);
    }
    public function menu(){
        $platillo = platillo::all();
        $ingredientes = ingrediente::all();
        return view('paginas/menu')->with('platillos',$platillo)->with('ingredientes',$ingredientes);
    }
    public function showdelete(){
        $platillo = platillo::all();
        return view('paginas/eliminarPlatillo')->with('platillos',$platillo);
    }
}