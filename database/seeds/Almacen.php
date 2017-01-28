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
		    'nombre' => 'Anden',
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
		    'nombre' => 'Tunel',
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
