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
		 
		 $Sonido="";
		 $BuscarAlerta=DB::table('alertas') 
		 ->join('alerta_tipos','alerta_tipos.id','alertas.tipo')
		 ->join('empresas','empresas.id','alertas.empresa')
		 ->where('alertas.empresa','=', Auth::user()->empresa)
		 ->where('alertas.status','=', $this->Activo)
		 ->select('alerta_tipos.nombre as AlertaNombre' , 
		 'empresas.nombre as EmpresaNombre', 
		 'alerta_tipos.sonido',
		 'alertas.created_at')->get();
		 $AlertasCriticas='<ul class="menu">';
		 foreach($BuscarAlerta as $Alerta){
		       $AlertasCriticas=$AlertasCriticas.'<li><a href="#"><h3>'.$Alerta->AlertaNombre."</br>".$Alerta->EmpresaNombre.'<small class="pull-right">'.$Alerta->created_at.'</small></h3></a></li>';
		       $Sonido=$Alerta->sonido;
			   $control=1;
		 } 
		 if(isset($control)){
		 $AlertasCriticas=$AlertasCriticas.'</ul>';
		 }
		 else{
		 $AlertasCriticas='';
		 }
		 $response = array($Sonido, $AlertasCriticas, '2', '3');
		 json_encode($response);
		 
		 return $response; 
    }
	
	public function Test_Alertas(){
	return view('vendor/adminlte/layouts/Test/TestAlertas');
	}
	
	public function Test_Activar_Alarma(Request $request){
	$tipo=$request->input('Alarma');
	
	
	        DB::table('alertas')->insert([
            'empresa' => Auth::user()->empresa,
			'usuario' => 	Auth::user()->id,
			'tipo' => $tipo,
			'descripcion' => 'Test',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			 ]);
			
			
	return back()->with('Success','Alarma Activada');	
	}
	
	
}
