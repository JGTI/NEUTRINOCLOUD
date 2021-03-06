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
Route::get('/Test_Alertas', 'Alertas@Test_Alertas');
Route::post('/Alertas', 'Alertas@Notificar_Alertas');
Route::post('/Silenciar_Alertas', 'Alertas@Silenciar_Alertas');
Route::post('/Test_Activar_Alarma', 'Alertas@Test_Activar_Alarma');
Route::get('/layout/{Empresa}', 'LayOut@VistaLayOut');
Route::get('/home', 'Dashboard@Dashboard');
Route::get('/Actualizar_Productos_Almacen', 'ImportControllerCSVProductosAlmacen@ProductosAlmacen');
Route::post('/importCSVProductosAlmacen', 'ImportControllerCSVProductosAlmacen@importExcel');
Route::get('/Actualizar_Recibo/{type}', 'ImportControllerCSVRecibo@Recibo');
Route::get('/Actualizar_Embarque/{type}', 'ImportContollerCSVEmbarque@Embarque');
Route::post('/importCSVRecibo', 'ImportControllerCSVRecibo@importExcel');
Route::post('/importCSVEmbarque', 'ImportContollerCSVEmbarque@importExcel');
Route::get('/Usuarios', 'Usuario@UsuarioVista');
Route::get('/Agregar_Usuario', 'Usuario@NuevoUsuarioVista');
Route::post('/Nuevo_Usuario', 'Usuario@NuevoUsuario');

Route::get('/api/Usuarios', function () {
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

           
Route::get('/api/Productos', function () {
	    $Productos =  DB::table('csv_producto_almacenes')
            ->where("empresa","=", Auth::user()->empresa)->where("status","=", 1)
			->join("clientes","clientes.id", '=', "csv_producto_almacenes.Cliente")
			->select("clientes.nombre as Cliente","csv_producto_almacenes.Producto","csv_producto_almacenes.DescripciondeProducto","csv_producto_almacenes.Ubicacion","csv_producto_almacenes.FCaducidad","csv_producto_almacenes.LoteCliente","csv_producto_almacenes.LTarima","csv_producto_almacenes.CantidadDisponible","csv_producto_almacenes.CantidadTotal","csv_producto_almacenes.FechadeRecibo")
			->get();
        return Datatables::of($Productos)->make(true);
});


 
Route::get('/Clientes', 'Cliente@ClientesVista');
Route::post('/Clientes_Alterar', 'Cliente@Clientes_Alterar');
Route::get('/api/Clientes', function () {
	    
		$Clientes =  DB::table('clientes')
            ->select('clientes.id', 'clientes.nombre', 'clientes.rgb')
			->where('clientes.status', DB::table('Status')->where('nombre', 'Activo')->first()->id)
            ->get();
			 
        return Datatables::of($Clientes)
			->addColumn('nombre', function ($Clientes) {
                return '<input  style="height:20px;width:100%;" type="text" class="input form-control" id="nombre_'.$Clientes->id.'" value="'.$Clientes->nombre.'"></input>';
            })
		    ->addColumn('rgbColor', function ($Clientes) {
                return '<center><input id="rgb_'.$Clientes->id.'" type="color" value="'.$Clientes->rgb.'"></input></center>';
            })
			->addColumn('modificar', function ($Clientes) {
                return '<center><button id="modificar_'.$Clientes->id.'" value="'.$Clientes->id.'" onclick="accionCliente(1,this.value)" class="btn btn-xs btn-naranja"><i class="glyphicon glyphicon-edit"></i></button></center>';
            })
			->addColumn('eliminar', function ($Clientes) {
			return '<center><button  id="eliminar_'.$Clientes->id.'" value="'.$Clientes->id.'" onclick="accionCliente(2,this.value)" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button ></center>';
            })->setRowId('id')->make(true);
});





