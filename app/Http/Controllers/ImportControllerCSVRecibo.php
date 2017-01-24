<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\csv_recibo;
use Auth;
use Excel;
use DB;
use Carbon\Carbon; 

class ImportControllerCSVRecibo extends Controller
{
	
	
	 public $Activo;
	 public $Inactivo;
	 public $Maximo;
	 public $Minimo;
    
	
	public function __construct(){
            $this->Activo = DB::table('Status')->where('nombre', 'Activo')->first()->id;
			$this->Inactivo = DB::table('Status')->where('nombre', 'Inactivo')->first()->id;
			$this->Maximo = DB::table('csv_recibo_tipos')->where('nombre', 'Maximo')->first()->id;
			$this->Minimo = DB::table('csv_recibo_tipos')->where('nombre', 'Minimo')->first()->id;
			
        }
		
		
    public function Recibo($tipo){
	  $Recibo = csv_recibo::all()->where("empresa","=", Auth::user()->empresa)->where("status","=", $this->Activo)->where("tipo","=", $this->$tipo);
	  $last_update=csv_recibo::select('updated_at')->where("status","=", $this->Activo)->where("tipo","=", $this->$tipo)->first();
      return view('vendor/adminlte/layouts/CSV/CSVRecibo',compact('last_update','Recibo','tipo'));
    }
	
	

	public function importExcel(Request $request)
	{

        $tipo=$request->input('tipo');
		if($request->hasFile('import_file')){			
			 $path = $request->file('import_file')->getRealPath();
		     $handle = fopen($path, "r");
             $IsCorrect=0;
             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
                {
			
	            if($IsCorrect==0){	
	                 if(
	                   utf8_encode ($data[0])=='Cliente'
	                   and utf8_encode ($data[1])=='Numero de Recibo'
	                   and utf8_encode ($data[2])=='Referencia del recibo'
	                   and utf8_encode ($data[3])=='Cantidad Recibida'
	                   and utf8_encode ($data[4])=='Fecha de Proceso'	
	                   and utf8_encode ($data[5])=='Tipo de Unidad'	
	                   and utf8_encode ($data[6])=='Agranel / Paletizado'	
	                   and utf8_encode ($data[7])=='Cant y Tipo Tar'
	                   and utf8_encode ($data[8])=='Inb / Outb'	
	                   and utf8_encode ($data[9])=='Operador'	
	                   and utf8_encode ($data[10])=='Fecha y Hora'	
	                   and utf8_encode ($data[11])=='Flujo del proceso'	
	                   and utf8_encode ($data[12])=='Sellos 1'	
	                   and utf8_encode ($data[13])=='Sellos 2'	
	                   and utf8_encode ($data[14])=='Temp Frente'	
	                   and utf8_encode ($data[15])=='Temp Medio'	
	                   and utf8_encode ($data[16])=='Temp Atrás'	
	                   and utf8_encode ($data[17])=='Temp Promedio'
	                   and utf8_encode ($data[18])=='Nombre Chofer'
	                   and utf8_encode ($data[19])=='Transporte') {
	                                                              csv_recibo::where("empresa","=", Auth::user()->empresa)
																			   ->where("status","=", $this->Activo)
																			   ->where("tipo","=", $this->$tipo)
																			   ->update(['status'=>$this->Inactivo]);

		                                	                       }
					    else{
		                    return back()->with('error','Error Porfavor Selecciona El CSV Correcto.');	
			                }
									}
				else{
		             try{
					    DB::table('csv_recibos')->insert(
                            ['tipo' => $this->$tipo,
							'empresa' => Auth::user()->id,
							'Cliente' => utf8_encode ($data[0]),
							'NumerodeRecibo' => utf8_encode ($data[1]),
							'ReferenciaRecibo' => utf8_encode ($data[2]),
							'CantidadRecibida' => utf8_encode ($data[3]),
							'FechadeProceso' => utf8_encode ($data[4]),
							'TipodeUnidad' => utf8_encode ($data[5]),
							'AgranelPaletizado' => utf8_encode ($data[6]),
							'CantTipoTar' => utf8_encode ($data[7]),
							'InbOutb' => utf8_encode ($data[8]),
							'Operador' => utf8_encode ($data[9]),
							'FechaHora' => utf8_encode ($data[10]),
							'FlujoProceso' => utf8_encode ($data[11]),
							'Sellos1' => utf8_encode ($data[12]),
							'Sellos2' => utf8_encode ($data[13]),
							'TempFrente' => utf8_encode ($data[14]),
							'TempMedio' => utf8_encode ($data[15]),
							'TempAtrás' => utf8_encode ($data[16]),
							'TempPromedio' => utf8_encode ($data[17]),
							'NombreChofer' => utf8_encode ($data[18]),
							'Transporte' => utf8_encode ($data[19]),
							'status' => $this->Activo,
							'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
							'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
							]);
						}
						catch(\Exception $e){
                             return back()->with('success','CSV Actualizado Con Exito.');
                                            }
			        }		
	            $IsCorrect++;
            }			  

		}
	}	
}
