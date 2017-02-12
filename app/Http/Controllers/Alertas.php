<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
use Carbon\Carbon; 

class Alertas extends Controller
{
	public $Activo;
	
    public function __construct(){
           	$this->Activo = DB::table('Status')->where('nombre', 'Activo')->first()->id;
	}
		
    public function Notificar_Alertas(Request $request){
		
		 $BuscarAlerta=DB::table('alertas') 
		 ->join('alerta_tipos','alerta_tipos.id','alertas.tipo')
		 ->join('empresas','empresas.id','alertas.empresa')
		 ->where('alertas.empresa','=', Auth::user()->empresa)
		 ->where('alertas.status','=', $this->Activo)
		 ->select('alerta_tipos.nombre as AlertaNombre' , 
		 'empresas.nombre as EmpresaNombre', 
		 'alerta_tipos.sonido')->get();
		 return($BuscarAlerta);
		 
		 $response=$BuscarAlerta;
		 
		 return response()->json($response); 
    }
}
