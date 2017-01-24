<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;

class LayOut extends Controller
{
     public function VistaLayOut(){
      return view('vendor/adminlte/layouts/LayOuts/LayOut');
    }
	
}
