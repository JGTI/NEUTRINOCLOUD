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

Route::get('/home', 'Dashboard@Dashboard');
Route::get('/HighChartsJS', 'HighChars@HighChars');
Route::get('/Actualizar_Productos_Almacen', 'ImportControllerCSVProductosAlmacen@ProductosAlmacen');
Route::post('/importCSVProductosAlmacen', 'ImportControllerCSVProductosAlmacen@importExcel');
Route::get('/Actualizar_Recibo/{type}', 'ImportControllerCSVRecibo@Recibo');
Route::post('/importCSVRecibo', 'ImportControllerCSVRecibo@importExcel');
Route::get('/UsuariosNeutrino', 'UsuarioNeutrino@UsuarioNeutrinoVista');
Route::get('/Agregar_Usuario', 'UsuarioNeutrino@NuevoUsuarioNeutrinoVista');
Route::post('/Nuevo_Usuario_Neutrino', 'UsuarioNeutrino@NuevoUsuarioNeutrino');
Route::get('/Ver_layOut', 'LayOut@VistaLayOut');
Route::get('/api/UsuariosNeutrino', function () {
	    $Users =  DB::table('users')
            ->join('roles', 'users.rol', '=', 'roles.id')
            ->select('users.id', 'users.name', 'users.email','roles.nombre as rol')
            ->get();
			
        return Datatables::of($Users)->addColumn('modificar', function ($Users) {
                return '<center><a href="#edit-'.$Users->id.'" class="btn btn-xs btn-naranja"><i class="glyphicon glyphicon-edit"></i></a></center>';
            })->addColumn('eliminar', function ($Users) {
			return '<center><a href="#" onclick="eliminar('.$Users->id.');" class="btn btn-xs btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></center>';
            })->make(true);
});






