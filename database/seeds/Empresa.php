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
            'nombre' => 'Querétaro, Qro',
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
            'nombre' => 'Bajío I, Villagrán, Gto',
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
            'nombre' => 'Bajío II, Villagrán, Gto',
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
            'nombre' => 'Irapuato, Gto',
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
            'nombre' => 'Zamora, Mich',
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
		    'id' => 6,
            'nombre' => 'Aguascalientes, Ags',
			'region' => DB::table('regiones')->where('nombre', 'Occidente')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 7,
            'nombre' => 'Guadalajara I, Jal',
			'region' => DB::table('regiones')->where('nombre', 'Occidente')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 8,
            'nombre' => 'Guadalajara II, Jal',
			'region' => DB::table('regiones')->where('nombre', 'Occidente')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 9,
            'nombre' => 'Tijuana, BC',
			'region' => DB::table('regiones')->where('nombre', 'Tijuana')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 10,
            'nombre' => 'Monterrey, NL',
			'region' => DB::table('regiones')->where('nombre', 'Norte')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 11,
            'nombre' => 'Monterrey ll, NL',
			'region' => DB::table('regiones')->where('nombre', 'Norte')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 12,
            'nombre' => 'Colombia, NL',
			'region' => DB::table('regiones')->where('nombre', 'Norte')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 13,
            'nombre' => 'Laguna Torreón, Coah',
			'region' => DB::table('regiones')->where('nombre', 'Norte')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 14,
            'nombre' => 'Culiacán, Sin',
			'region' => DB::table('regiones')->where('nombre', 'Norte')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 15,
            'nombre' => 'Cuautitlán I, Mex',
			'region' => DB::table('regiones')->where('nombre', 'Centro')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 16,
            'nombre' => 'Cuautitlán II, Mex',
			'region' => DB::table('regiones')->where('nombre', 'Centro')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 17,
            'nombre' => 'Tlalnepantla, Mex',
			'region' => DB::table('regiones')->where('nombre', 'Centro')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 18,
            'nombre' => 'Ocoyoacac, Mex',
			'region' => DB::table('regiones')->where('nombre', 'Centro')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 19,
            'nombre' => 'San Martín Obispo, Mex',
			'region' => DB::table('regiones')->where('nombre', 'Centro')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 20,
            'nombre' => 'Tula, Hgo',
			'region' => DB::table('regiones')->where('nombre', 'Centro')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		try{
		  DB::table('empresas')->insert([
		    'id' => 21,
            'nombre' => 'Tepeji del Río, Hgo',
			'region' => DB::table('regiones')->where('nombre', 'Centro')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
			
		try{
		  DB::table('empresas')->insert([
		    'id' => 22,
            'nombre' => 'Cancún, QR',
			'region' => DB::table('regiones')->where('nombre', 'Cancun')->first()->id,
			'status' => DB::table('Status')->where('nombre', 'Activo')->first()->id,
            'created_at'				=>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
    }
}
