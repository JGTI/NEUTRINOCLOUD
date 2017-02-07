<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {	
	    try{
		DB::table('status')->insert([
		    'id' => 1,
            'nombre' => 'Activo',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		DB::table('status')->insert([
		    'id' => 2,
            'nombre' => 'Inactivo',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);	
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
		DB::table('status')->insert([
		    'id' => 3,
            'nombre' => 'Estable',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
		DB::table('status')->insert([
		    'id' => 4,
            'nombre' => 'Inestable',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
    }
}
