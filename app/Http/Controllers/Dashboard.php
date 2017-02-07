<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon; 

class Dashboard extends Controller
{
	 
	 public $Inactivo;
	 public $Activo;
	 public $Almacen;
    
	
	public function __construct(){
            $this->Activo = DB::table('Status')->where('nombre', 'Activo')->first()->id;
			$this->Inactivo = DB::table('Status')->where('nombre', 'Inactivo')->first()->id;	
        }
		
		
    public function Dashboard(){
		$Almacen=DB::table('almacenes')->where('status', $this->Activo)->where('empresa', Auth::user()->empresa)->get();
		$Region=DB::table('regiones')
		->join('empresas','empresas.region','regiones.id')
		->select('regiones.nombre')
		->where('regiones.status', $this->Activo)
		->where('empresas.id', Auth::user()->empresa)
		->first()->nombre;
		$Region_Id=DB::table('regiones')->where('regiones.nombre',$Region)->first()->id;
		
		
		
		
		$AlmacenesArray=DB::table('csv_producto_almacenes')
		->join('empresas','empresas.id','csv_producto_almacenes.empresa')
		->select('empresas.nombre as nombre','empresas.id as id')
		->where('empresas.status', $this->Activo)
		->where('empresas.region',$Region_Id)
		->groupBy('empresas.nombre')
		->get()->toArray();
		
		
		$x=0;
		foreach($AlmacenesArray as $AlmacenesA){
			$ArrayEmpresas[$x] = "'".$AlmacenesA->nombre."'";
			$ArrarProductos[$x] = $AlmacenesA->id;
		$x++;
		}
	
		
		
		
		return view('vendor.adminlte.layouts.app',compact('Almacen','Region','ArrayEmpresas','ArrarProductos'));
    }
}
