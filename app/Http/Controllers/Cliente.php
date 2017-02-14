<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
use Carbon\Carbon; 
use App\Role; 
use App\Empresa; 
use App\Regione;
use App\User;



class Cliente extends Controller
{
	 
	 public $Roles;
	 public $Activo;
	 public $Inactivo;
	

   	
	public function __construct(){
           	$this->Roles=DB::table('roles')->where('nombre','<>','Director General')->where('nombre','<>','Administrador')->select('id', 'nombre')->get();
			$this->Activo = DB::table('Status')->where('nombre', 'Activo')->first()->id;
			$this->Inactivo = DB::table('Status')->where('nombre', 'Inactivo')->first()->id;
        }
		
     public function ClientesVista(){

      return view('vendor/adminlte/layouts/Clientes/ClientesNeutrino');
    }
	
	public function NuevoUsuarioNeutrinoVista(){
		$Empresas_Region_User=DB::table('empresas')
	  ->where('region',DB::table('empresas')->where('id', Auth::user()->empresa)
	  ->first()->region)->select('id', 'nombre')->get();
    	$Roles=$this->Roles;
		
	  
      return view('vendor/adminlte/layouts/Clientes/NuevoUsuarioNeutrino',compact('Empresas_Region_User','Roles'));
    }
	
	public function NuevoUsuarioNeutrino(Request $request){
		$nombre=$request->input('nombre');
		$email=$request->input('email');
		$password=$request->input('password');
		$empresa=$request->input('empresa');
		$rol=$request->input('rol');
		$NewEmail=DB::table('users')->where('email','=',$email)->select('email')->get('email');
		if(count($NewEmail)!=0)
			{
			return back()->with('error','Error El Correo Ingresado Ya Existe en la Base De Datos.');	
			}
			else
				{
			 try{
					    DB::table('users')->insert(
                            [
							'name' => $nombre,
							'email' => $email,
							'password' => bcrypt($password),
							'status' => $this->Inactivo,
							'empresa' => $empresa,
							'rol' => $rol,
							'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
							'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
							]);
						}
						catch(\Exception $e){
                        return back()->with('error','Algo Salio Mal Intenta Nuevamente.');
                                            }
			return back()->with('success','Usuario Registrado Con Exito.');
			}
    }
	
	public function Clientes_Alterar(Request $request){
		 
		 $nombre=$request->input('nombre');
		 $rgb=$request->input('rgb');
		 $accion=$request->input('accion');
		 $id_cliente=$request->input('id_cliente');
		 
		 if($accion==1){
			
			DB::table('clientes')
            ->where('id' , $id_cliente)
            ->update(['rgb' => $rgb,'nombre' => $nombre]);
			
            $div='<div class="master alert alert-success alert-dismissable" role="alert">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <i class="fa fa-times" aria-hidden="true"></i> '.$nombre.' Modificado Con Exito
			</div>';
         }
		 else{
			 
			
			
			DB::table('clientes')
            ->where('id' , $id_cliente)
            ->update(['status' => $this->Inactivo]);
			
             $div='<div class="master alert alert-danger alert-dismissable" role="alert">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <i class="fa fa-times" aria-hidden="true"></i> '.$nombre.' Eliminado Con Exito
			</div>';
         }
		 
		 $response = array($div);
		 json_encode($response);
		 return $response; 
		 
	} 
}
