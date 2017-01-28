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
		return view('vendor.adminlte.layouts.app',compact('Almacen'));
    }
}
