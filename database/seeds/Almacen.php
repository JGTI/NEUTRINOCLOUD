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
            'id' => '10',
		    'nombre' => 'Camara 10',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'temperatura_maxima' => '0',
			'temperatura_minima' => '0',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
            DB::table('almacenes')->insert([
            'id' => '20',
		    'nombre' => 'Camara 20',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'temperatura_maxima' => '0',
			'temperatura_minima' => '0',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
	
		
		
		try{
            DB::table('almacenes')->insert([
            'id' => '30',
		    'nombre' => 'Camara 30',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'temperatura_maxima' => '0',
			'temperatura_minima' => '0',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		
		try{
            DB::table('almacenes')->insert([
            'id' => '40',
		    'nombre' => 'Camara 40',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'temperatura_maxima' => '0',
			'temperatura_minima' => '0',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
            DB::table('almacenes')->insert([
            'id' => '50',
		    'nombre' => 'Camara 50',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'temperatura_maxima' => '0',
			'temperatura_minima' => '0',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
            DB::table('almacenes')->insert([
            'id' => '60',
		    'nombre' => 'Tunel Rafaga',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'temperatura_maxima' => '0',
			'temperatura_minima' => '0',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
			try{
            DB::table('almacenes')->insert([
            'id' => '70',
		    'nombre' => 'Anden',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
			'temperatura_maxima' => '0',
			'temperatura_minima' => '0',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
    }
}
