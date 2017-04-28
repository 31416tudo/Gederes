<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/chef', function(){
	return view('paginas/chef');
})->name('chef');

Route::get('/log-in', function(){
	return view('paginas/log-in');
})->name('log-in');

Route::get('/logout', function(){
	Auth::logout();
	return view('welcome');
})->name('log-out');

Route::get('/menu', 'platilloController@menu')->name('menu');
Route::get('/menu/agregarPlatillo','ingredientesController@lista')->name('agregarPlatillo');
Route::get('/menu/actualizarPlatillo', 'ingredientesController@listaupdate')->name('actualizarPlatillo');
Route::get('/menu/eliminarPlatillo', 'platilloController@showdelete')->name('eliminarPlatillo');
Route::delete('/menu', 'platilloController@delete')->name('eliminado');
Route::put('/menu', 'platilloController@update')->name('actualizado');
Route::post('/menu', 'platilloController@store')->name('insertado');
Route::post('/ordenenviada', 'ordenController@crearorden')->name('ordenenviada');
Route::get('/chef', 'ordenController@muestraordenes')->name('chef');
Route::get('/almacen','ingredientesController@almacen')->name('almacen');
Route::post('/ingredienteinsertado', 'ingredientesController@store')->name('ingredienteinsertado');
Route::put('/ingredienteactualizado', 'ingredientesController@update')->name('ingredienteactualizado'); 
Route::put('/chef/listo', 'ordenController@updateorden')->name('listo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
