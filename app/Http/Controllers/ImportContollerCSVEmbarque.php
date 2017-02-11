<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\csv_embarque;
use Auth;
use Excel;
use DB;
use Carbon\Carbon; 

class ImportContollerCSVEmbarque extends Controller
{
     public $Activo;
	 public $Inactivo;
	 public $Maximo;
	 public $Minimo;
    
	
	public function __construct(){
            $this->Activo = DB::table('Status')->where('nombre', 'Activo')->first()->id;
			$this->Inactivo = DB::table('Status')->where('nombre', 'Inactivo')->first()->id;
			$this->Maximo = DB::table('csv_tipos')->where('nombre', 'Maximo')->first()->id;
			$this->Minimo = DB::table('csv_tipos')->where('nombre', 'Minimo')->first()->id;
			
        }
		
		
    public function Embarque($tipo){
		
	 $Embarque = csv_embarque::where("empresa","=", Auth::user()->empresa)
	 ->where("status","=", $this->Activo)
	 ->where("tipo","=", $this->$tipo)
	 ->select('Cliente','Numerodeorden','ReferenciaCliente','NombreConsignatario','CantidadEmbarcada','FechaProcesada','Tipodeunidad','Agranel/Paletizado as AgranelPaletizado','Inb/Outb as InbOutb','Operador','Fecha/Hora as FechaHora','Flujodelproceso','Sellos1','Sellos2','TempFrente','TempMedio','TempAtras','CantyTipodeTarima','NombreChofer','ON_LOAD')
     ->get();
	 
	 $last_update=csv_embarque::select('updated_at')->where("status","=", $this->Activo)->where("tipo","=", $this->$tipo)->first();
      
	  
	  return view('vendor/adminlte/layouts/CSV/CSVEmbarque',compact('last_update','Embarque','tipo'));
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
					   and utf8_encode ($data[1])=='Numero de orden'
					   and utf8_encode ($data[2])=='Referencia Cliente'
					   and utf8_encode ($data[3])=='Nombre Consignatario'
					   and utf8_encode ($data[4])=='Cantidad Embarcada'
					   and utf8_encode ($data[5])=='Fecha Procesada'
					   and utf8_encode ($data[6])=='Tipo de unidad'
					   and utf8_encode ($data[7])=='Agranel / Paletizado'
					   and utf8_encode ($data[8])=='Inb / Outb'
					   and utf8_encode ($data[9])=='Operador'
					   and utf8_encode ($data[10])=='Fecha/Hora'
					   and utf8_encode ($data[11])=='Flujo del proceso'
					   and utf8_encode ($data[12])=='Sellos 1'
					   and utf8_encode ($data[13])=='Sellos 2'
					   and utf8_encode ($data[14])=='Temp Frente'
					   and utf8_encode ($data[15])=='Temp Medio'
					   and utf8_encode ($data[16])=='Temp Atras'
					   and utf8_encode ($data[17])=='Cant y Tipo de Tarima'
					   and utf8_encode ($data[18])=='Nombre Chofer'
					   and utf8_encode ($data[19])=='ON_LOAD') {
	                                                              csv_embarque::where("empresa","=", Auth::user()->empresa)
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
					  if($data[0]!=""){
					    DB::table('csv_embarques')->insert(
                            ['tipo' => $this->$tipo,
							'empresa' => Auth::user()->empresa,
							'Cliente' => utf8_encode ($data[0]),
							'Numerodeorden' => utf8_encode ($data[1]),
							'ReferenciaCliente' => utf8_encode ($data[2]),
							'NombreConsignatario' => utf8_encode ($data[3]),
							'CantidadEmbarcada' => utf8_encode ($data[4]),
							'FechaProcesada' => utf8_encode ($data[5]),
							'Tipodeunidad' => utf8_encode ($data[6]),
							'Agranel/Paletizado' => utf8_encode ($data[7]),
							'Inb/Outb' => utf8_encode ($data[8]),
							'Operador' => utf8_encode ($data[9]),
							'Fecha/Hora' => utf8_encode ($data[10]),
							'Flujodelproceso' => utf8_encode ($data[11]),
							'Sellos1' => utf8_encode ($data[12]),
							'Sellos2' => utf8_encode ($data[13]),
							'TempFrente' => utf8_encode ($data[14]),
							'TempMedio' => utf8_encode ($data[15]),
							'TempAtras' => utf8_encode ($data[16]),
							'CantyTipodeTarima' => utf8_encode ($data[17]),
							'NombreChofer' => utf8_encode ($data[18]),
							'ON_LOAD' => utf8_encode ($data[19]),
							'status' => $this->Activo,
							'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
							'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
							]);
						}
						                      
					}
					catch(\Exception $e){
                             return back()->with('success','CSV Actualizado Con Exito.');
                                            } 
			        }		
	            $IsCorrect++;
            }
            return back()->with('success','CSV Actualizado Con Exito.');			

		}
	}	
}
