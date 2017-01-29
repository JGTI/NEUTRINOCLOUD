<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
        try{
            DB::table('almacenes')->insert([
            'id' => 'LM35AF1',
		    'nombre' => 'Camara 10',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
            DB::table('almacenes')->insert([
            'id' => 'LM35AFT',
		    'nombre' => 'Camara 20',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
            DB::table('almacenes')->insert([
            'id' => 'LM35AF2T',
		    'nombre' => 'Camara 10',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
            DB::table('almacenes')->insert([
            'id' => 'LM35AF222T',
		    'nombre' => 'Camara 30',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		
		try{
            DB::table('almacenes')->insert([
            'id' => 'LM135AF2T',
		    'nombre' => 'Camara 40',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
            DB::table('almacenes')->insert([
            'id' => 'LM13sAF2T',
		    'nombre' => 'Camara 50',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
            DB::table('almacenes')->insert([
            'id' => 'LM135TAF2T',
		    'nombre' => 'Tunel Rafaga',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
    }
}
