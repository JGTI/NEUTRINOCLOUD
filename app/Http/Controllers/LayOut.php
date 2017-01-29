<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon; 


class LayOut extends Controller
{
	
	 public $Inactivo;
	 public $Activo;
	 public $Almacen;
    
	
	public function __construct(){
            $this->Activo = DB::table('Status')->where('nombre', 'Activo')->first()->id;
			$this->Inactivo = DB::table('Status')->where('nombre', 'Inactivo')->first()->id;	
        }
		
		
     public function VistaLayOut(){
	  $LayOut=DB::table('csv_producto_almacenes')->where('status', $this->Activo)->get();
      return view('vendor/adminlte/layouts/LayOuts/LayOut',compact('LayOut'));
    }
	
}
