<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AlertaTipo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
        DB::table('alerta_tipos')->insert([
		    'id' => 1,
            'nombre' => 'Fuga de Gas Amoniaco',
			'sonido' => 'Amoniaco.mp3',
            'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		try{
        DB::table('alerta_tipos')->insert([
		    'id' => 2,
            'nombre' => 'Temperatura Baja',
			'sonido' => 'Temperatura.mp3',
            'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
        DB::table('alerta_tipos')->insert([
		    'id' => 3,
            'nombre' => 'Temperatura Alta',
			'sonido' => 'Temperatura.mp3',
            'created_at'  =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
        DB::table('alerta_tipos')->insert([
		    'id' => 4,
            'nombre' => 'Nueva Notificación',
			'sonido' => 'Mensaje.mp3',
            'created_at'  =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
        DB::table('alerta_tipos')->insert([
		    'id' => 5,
            'nombre' => 'Falla de Electricidad',
			'sonido' => '',
            'created_at'  =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
    }
}
