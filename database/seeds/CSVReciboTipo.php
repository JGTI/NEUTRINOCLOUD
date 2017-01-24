<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CSVReciboTipo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		try{
        DB::table('csv_recibo_tipos')->insert([
		    'id' => 1,
            'nombre' => 'Maximo',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		try{
		DB::table('csv_recibo_tipos')->insert([
		    'id' => 2,
            'nombre' => 'Minimo',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
    }
}
