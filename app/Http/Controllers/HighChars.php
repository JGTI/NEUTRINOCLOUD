<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HighChars extends Controller
{
    public function HighChars(){
		 return view('vendor/adminlte/layouts/HighCharts/HighCharts');
      }
	  
}
