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
		
    }
}
