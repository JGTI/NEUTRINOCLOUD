<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon; 
use App\Cliente;
use App\csv_producto_almacene;


class LayOut extends Controller
{
	
	 public $Inactivo;
	 public $Activo;
	 public $Almacen;
    
	
	public function __construct(){
            $this->Activo = DB::table('Status')->where('nombre', 'Activo')->first()->id;
			$this->Inactivo = DB::table('Status')->where('nombre', 'Inactivo')->first()->id;	
        }
		
		
     public function VistaLayOut($emp){
	  $EmpresaNombre=$emp;
      $EmpresaId=DB::table('empresas')->where('nombre',"=", $emp)->first()->id;	
	  $LayOut=DB::table('csv_producto_almacenes')
	  ->join('clientes', 'clientes.id', '=', 'csv_producto_almacenes.Cliente')
	  ->select('csv_producto_almacenes.DescripciondeProducto','csv_producto_almacenes.Ubicacion', 'clientes.nombre', 'clientes.rgb')
	  ->where('csv_producto_almacenes.status', $this->Activo)
	  ->where('csv_producto_almacenes.empresa', $EmpresaId)
	  ->get();     
	  
	  
	  $contenido=DB::table('clientes')
	  ->join('csv_producto_almacenes', 'csv_producto_almacenes.Cliente', '=', 'clientes.id')
	  ->select('clientes.id','clientes.rgb','clientes.nombre')
	  ->where('csv_producto_almacenes.status', $this->Activo)
	  ->where('csv_producto_almacenes.empresa', $EmpresaId)
	  ->groupBy('clientes.id')
	  ->get();  
	  
	  $contador=0;

      return view('vendor/adminlte/layouts/LayOuts/LayOut',compact('LayOut','EmpresaId','EmpresaNombre','contenido','contador'));
    }
	
}
