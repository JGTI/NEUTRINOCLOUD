<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MasterUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     **/
    public function run()
    {
        try{
            DB::table('users')->insert([
            'name' => 'Jose Garcia',
			'email' => 'neutrino@neutrino.com',
			'password' => '$2y$10$83ye2hsU6Y87ntcWIzfWuuMQmAUt6GDwFLK0gQLPrPKyzzX1k3fYu',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
            'rol' => DB::table('roles')->where('nombre', 'Administrador')->first()->id,
			'remember_token' =>'',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
            DB::table('users')->insert([
            'name' => 'Neutrino',
			'email' => 'neutrino.frialsa@gmail.com',
			'password' => '$2y$10$83ye2hsU6Y87ntcWIzfWuuMQmAUt6GDwFLK0gQLPrPKyzzX1k3fYu',
			'status' => DB::table('status')->where('nombre', 'Activo')->first()->id,
			'empresa' => DB::table('empresas')->where('nombre', 'Querétaro, Qro')->first()->id,
            'rol' => DB::table('roles')->where('nombre', 'Administrador')->first()->id,
			'remember_token' =>'',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		

    }
}


