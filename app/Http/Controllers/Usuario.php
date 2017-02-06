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



class Usuario extends Controller
{
	 
	 public $Roles;
	 public $Activo;
	 public $Inactivo;
	

   	
	public function __construct(){
           	$this->Roles=DB::table('roles')->where('nombre','<>','Director General')->where('nombre','<>','Administrador')->select('id', 'nombre')->get();
			$this->Activo = DB::table('Status')->where('nombre', 'Activo')->first()->id;
			$this->Inactivo = DB::table('Status')->where('nombre', 'Inactivo')->first()->id;
        }
		
     public function UsuarioVista(){

      return view('vendor/adminlte/layouts/Usuarios/UsuarioNeutrino');
    }
	
	public function NuevoUsuarioVista(){
		$Empresas_Region_User=DB::table('empresas')
	  ->where('region',DB::table('empresas')->where('id', Auth::user()->empresa)
	  ->first()->region)->select('id', 'nombre')->get();
    	$Roles=$this->Roles;
		
	  
      return view('vendor/adminlte/layouts/Usuarios/NuevoUsuarioNeutrino',compact('Empresas_Region_User','Roles'));
    }
	
	public function NuevoUsuario(Request $request){
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
}
