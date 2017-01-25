<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Region extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		try{
        DB::table('regiones')->insert([
		    'id' => 1,
            'nombre' => 'Bajio',
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
        DB::table('regiones')->insert([
		    'id' => 2,
            'nombre' => 'Occidente',
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
        DB::table('regiones')->insert([
		    'id' => 3,
            'nombre' => 'Tijuana',
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
        DB::table('regiones')->insert([
		    'id' => 4,
            'nombre' => 'Norte',
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
        DB::table('regiones')->insert([
		    'id' => 5,
            'nombre' => 'Centro',
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
        DB::table('regiones')->insert([
		    'id' => 6,
            'nombre' => 'Cancun',
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
    }
}
