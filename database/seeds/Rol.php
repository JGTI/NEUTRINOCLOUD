<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Rol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		try{
        DB::table('roles')->insert([
		    'id' => 1,
            'nombre' => 'Administrador',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
        DB::table('roles')->insert([
		    'id' => 2,
            'nombre' => 'Director General',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
        DB::table('roles')->insert([
		    'id' => 3,
            'nombre' => 'Gerente Regional',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
        DB::table('roles')->insert([
		    'id' => 4,
            'nombre' => 'Gerente Planta',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
        DB::table('roles')->insert([
		    'id' => 5,
            'nombre' => 'Jefe de Anden',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
        DB::table('roles')->insert([
		    'id' => 6,
            'nombre' => 'Supervisor',
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		
		
    }
}
