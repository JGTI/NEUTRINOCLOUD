<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\csv_producto_almacene;
use Auth;
use Excel;
use DB;
use Carbon\Carbon; 

class ImportControllerCSVProductosAlmacen extends Controller
{
     public $Activo;
	 public $Inactivo;
	 
    
	
	public function __construct(){
            $this->Activo = DB::table('Status')->where('nombre', 'Activo')->first()->id;
			$this->Inactivo = DB::table('Status')->where('nombre', 'Inactivo')->first()->id;
        }
		
	public function ProductosAlmacen(){
		
	  $Productos = csv_producto_almacene::all()->where("empresa","=", Auth::user()->empresa)->where("status","=", $this->Activo);
	  $last_update=csv_producto_almacene::select('updated_at')->where("status","=", $this->Activo)->first();
      return view('vendor/adminlte/layouts/CSV/CSVProductosAlmacen',compact('last_update','Productos'));
    }
	
	
	public function importExcel(Request $request)
	{
		
		

        
		if($request->hasFile('import_file')){			
			 $path = $request->file('import_file')->getRealPath();
		     $handle = fopen($path, "r");
             $IsCorrect=0;
             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
                {
			
	            if($IsCorrect==0){	
	                 if(
					                      utf8_encode ($data[0])=='Cliente'
										  and utf8_encode ($data[1])=='Producto'
										  and utf8_encode ($data[2])=='Descripcion de Producto'
										  and utf8_encode ($data[3])=='Ubicacion'
										  and utf8_encode ($data[4])=='F. Caducidad'
										  and utf8_encode ($data[5])=='Lote Cliente'
										  and utf8_encode ($data[6])=='L. Tarima'
										  and utf8_encode ($data[7])=='En Preparacion'
										  and utf8_encode ($data[8])=='En Recibo'
										  and utf8_encode ($data[9])=='Cantidad Retenida'
										  and utf8_encode ($data[10])=='Codigo de Retencion'
										  and utf8_encode ($data[11])=='Cantidad Disponible'
										  and utf8_encode ($data[12])=='Cantidad Total'
										  and utf8_encode ($data[13])=='Fecha de Recibo'
										  and utf8_encode ($data[14])=='Entrada'
	                   ) {
	                                                              csv_producto_almacene::where("empresa","=", Auth::user()->empresa)
																			   ->where("status","=", $this->Activo)
																			   ->update(['status'=>$this->Inactivo]);

		                                	                       }
					    else{
		                    return back()->with('error','Error Porfavor Selecciona El CSV Correcto.');	
			                }
									}
				else{
		             try{
						 
						$clientes=DB::table('clientes')->select('clientes.id')->where('clientes.id','=',$data[0])->get();
	                    if(count($clientes)==0){
                   
                                DB::table('clientes')->insert([
								'id' => $data[0],
			                    'nombre' => 'DESCONOCIDO',
			                    'rgb' => '#FFFF88',
			                    'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			                    'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
                                ]);
		                    
		                 
	                       }
					    DB::table('csv_producto_almacenes')->insert(
                            [					
							'empresa' => Auth::user()->id,
							'Cliente' => utf8_encode ($data[0]),
	                        'Producto' => utf8_encode ($data[1]),
	                        'DescripciondeProducto' => utf8_encode ($data[2]),
	                        'Ubicacion' => utf8_encode ($data[3]),
	                        'FCaducidad' => utf8_encode ($data[4]),
	                        'LoteCliente' => utf8_encode ($data[5]),
	                        'LTarima' => utf8_encode ($data[6]),
	                        'EnPreparacion' => utf8_encode ($data[7]),
	                        'EnRecibo' => utf8_encode ($data[8]),
	                        'CantidadRetenida' => utf8_encode ($data[9]),
	                        'CodigodeRetencion' => utf8_encode ($data[10]),
	                        'CantidadDisponible' => utf8_encode ($data[11]),
	                        'CantidadTotal' => utf8_encode ($data[12]),
	                        'FechadeRecibo' => utf8_encode ($data[13]),
	                        'Entrada' => utf8_encode ($data[14]),
							'status' => $this->Activo,
							'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
							'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
							]);
						}
						catch(\Exception $e){
                            //Todo permanece bien ya que este CSV no tiene alretraciones 
                                            }
			        }		
	            $IsCorrect++;
            }		
             return back()->with('success','CSV Actualizado Con Exito.');			

		}
	}	
	
}
