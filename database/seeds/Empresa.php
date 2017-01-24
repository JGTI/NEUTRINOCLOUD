<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		try{
        DB::table('empresas')->insert([
		    'id' => 1,
            'nombre' => 'Frialsa Queretaro',
			'region' => DB::table('regiones')->where('nombre', 'Bajio')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 2,
            'nombre' => 'Frialsa Villagran',
			'region' => DB::table('regiones')->where('nombre', 'Bajio')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 3,
            'nombre' => 'Frialsa Villagran II',
			'region' => DB::table('regiones')->where('nombre', 'Bajio')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 4,
            'nombre' => 'Irapuato',
			'region' => DB::table('regiones')->where('nombre', 'Bajio')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 5,
            'nombre' => 'Zamora',
			'region' => DB::table('regiones')->where('nombre', 'Bajio')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
    }
}
