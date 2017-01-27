<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Actualizar_Productos_Almacen', 'ImportControllerCSVProductosAlmacen@ProductosAlmacen');
Route::post('/importCSVProductosAlmacen', 'ImportControllerCSVProductosAlmacen@importExcel');
Route::get('/Actualizar_Recibo/{type}', 'ImportControllerCSVRecibo@Recibo');
Route::post('/importCSVRecibo', 'ImportControllerCSVRecibo@importExcel');
Route::get('/UsuariosNeutrino', 'UsuarioNeutrino@UsuarioNeutrinoVista');
Route::get('/Agregar_Usuario', 'UsuarioNeutrino@NuevoUsuarioNeutrinoVista');
Route::post('/Nuevo_Usuario_Neutrino', 'UsuarioNeutrino@NuevoUsuarioNeutrino');
Route::get('/Ver_layOut', 'LayOut@VistaLayOut');
Route::get('/api/UsuariosNeutrino', function () {
	    $Users = App\User::all()->where("status","=", 1);
        return Datatables::of($Users)->make(true);
});






