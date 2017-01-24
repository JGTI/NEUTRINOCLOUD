<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use Carbon\Carbon; 

class UsuarioNeutrino extends Controller
{
     public function UsuarioNeutrinoVista(){
      return view('vendor/adminlte/layouts/Usuarios/UsuarioNeutrino');
    }
	public function NuevoUsuarioNeutrinoVista(){
      return view('vendor/adminlte/layouts/Usuarios/NuevoUsuarioNeutrino');
    }
}
