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
	  
	  try{
		   $lastUpdate=DB::table('csv_producto_almacenes')->where('csv_producto_almacenes.empresa',"=", $EmpresaId)->where('csv_producto_almacenes.status', $this->Activo)->first()->created_at;
		 }
	  catch(\Exception $e){
		  $lastUpdate="Sin Registros";
		  }
		  
	 
	  
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
	  
	  
	  $AlmacenesArray=DB::table('csv_producto_almacenes')
		->join('empresas','empresas.id','csv_producto_almacenes.empresa')
		->join('clientes','clientes.id','csv_producto_almacenes.Cliente')
		->select('clientes.id as id_cliente','csv_producto_almacenes.DescripciondeProducto as DescripciondeProducto','clientes.nombre as nombre',DB::raw('count(*) as total'))
		->where('empresas.status', $this->Activo)
		->where('csv_producto_almacenes.status', $this->Activo)
		->where('empresas.id',$EmpresaId)
		->groupBy('csv_producto_almacenes.Cliente')
		->get()
		;
		
		
		 
		$x=0;
		$ArrayClientes[$x]="";
		$ArrarProductos[$x]="";
		foreach($AlmacenesArray as $AlmacenesA){
			$ArrayClientes[$x] = '{name:"'.$AlmacenesA->nombre.'",y:'.$AlmacenesA->total.',drilldown:"'.$AlmacenesA->nombre.'"}';
		
		$AlmacenesProductoArray=DB::table('csv_producto_almacenes')
		->join('empresas','empresas.id','csv_producto_almacenes.empresa')
		->join('clientes','clientes.id','csv_producto_almacenes.Cliente')
		->select('clientes.id as id_cliente','csv_producto_almacenes.DescripciondeProducto as DescripciondeProducto','clientes.nombre as nombre',DB::raw('count(*) as total'))
		->where('empresas.status', $this->Activo)
		->where('csv_producto_almacenes.status', $this->Activo)
		->where('empresas.id',$EmpresaId)
		->where('csv_producto_almacenes.Cliente',$AlmacenesA->id_cliente)
		->groupBy('csv_producto_almacenes.DescripciondeProducto')
		->get()
		;
			$ArrarProductos[$x] = '{
                name: "'.$AlmacenesA->nombre.'",
                id: "'.$AlmacenesA->nombre.'",
                data: [
                    [
                        "v11.0",
                        24.13
                    ],
                    [
                        "v8.0",
                        17.2
                    ],
                ]
            }';
		$x++;
		
		}

      return view('vendor/adminlte/layouts/LayOuts/LayOut',
	  compact('LayOut','EmpresaId','EmpresaNombre','contenido','contador','lastUpdate','ArrayClientes','ArrarProductos'));
    }
	
}
