<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            DB::table('clientes')->insert([
		    'id' => 33,
			'nombre' => 'BACHOCO SA DE CV',
			'rgb' => '#FF8000',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		  try{
            DB::table('clientes')->insert([
		    'id' => 96,
			'nombre' => 'EXPOR SAN ANTONIO S.A DE C.V.',
			'rgb' => '#FF0000',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		  try{
            DB::table('clientes')->insert([
		    'id' => 157,
			'nombre' => 'ARNIME S.A. DE C.V.',
			'rgb' => '#C0C0C0',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		  try{
            DB::table('clientes')->insert([
		    'id' => 309,
			'nombre' => 'EMPACADORA CELAYA S.A DE C.V.',
			'rgb' => '#66CC00',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		  try{
            DB::table('clientes')->insert([
		    'id' => 479,
			'nombre' => 'COVEMEX S.A DE C.V.',
			'rgb' => '#FFFF33',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		  try{
            DB::table('clientes')->insert([
		    'id' => 1146,
			'nombre' => 'FRIGORIZADOS LA HUERTA SA CV',
			'rgb' => '#00994C',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		  try{
            DB::table('clientes')->insert([
		    'id' => 33,
			'nombre' => 'BACHOCO SA DE CV',
			'rgb' => '#FF8000',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		  try{
            DB::table('clientes')->insert([
		    'id' => 2003,
			'nombre' => 'XTRA CONGELADOS NAT SA DE CV J',
			'rgb' => '#CCCCFF',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		  try{
            DB::table('clientes')->insert([
		    'id' => 2326,
			'nombre' => 'INDUBA PAVOS S.A DE C.V.',
			'rgb' => '#E0E0E0',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		  try{
            DB::table('clientes')->insert([
		    'id' => 100689,
			'nombre' => 'PINNACLE FOODS GROUP LLC',
			'rgb' => '#$C0099',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		  try{
            DB::table('clientes')->insert([
		    'id' => 100742,
			'nombre' => 'TECNOFRUIT S.A. DE C.V.',
			'rgb' => '#00FF80',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		
		 try{
            DB::table('clientes')->insert([
		    'id' => 100960,
			'nombre' => 'PROTEINA ANIMAL, SA DE CV',
			'rgb' => '#999900',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		
		 try{
            DB::table('clientes')->insert([
		    'id' => 100193,
			'nombre' => 'AYVI, SA DE CV',
			'rgb' => '#CCCC00',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		
		 try{
            DB::table('clientes')->insert([
		    'id' => 2002,
			'nombre' => 'XTRA CONGELADOS (JR)',
			'rgb' => '#33FF99',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		 try{
            DB::table('clientes')->insert([
		    'id' => 2189,
			'nombre' => 'GRANJERO FELIZ, S DE RL DE CV',
			'rgb' => '#009999',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		 try{
            DB::table('clientes')->insert([
		    'id' => 678,
			'nombre' => 'MC CAIN DE MEXICO, SA DE CV',
			'rgb' => '#660000',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		
		 try{
            DB::table('clientes')->insert([
		    'id' => 100731,
			'nombre' => 'RANCHO VISTALEGRE, S PR DE RL DE CV',
			'rgb' => '#FFCCCC',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		 try{
            DB::table('clientes')->insert([
		    'id' => 1009601,
			'nombre' => 'PROTEINA ANIMAL, SA DE CV (Cárnico)',
			'rgb' => '	#BDB76B',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		 try{
            DB::table('clientes')->insert([
		    'id' => 15,
			'nombre' => "PILGRIM'S PRIDE, S DE RL DE CV",
			'rgb' => '#E6E6FA',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		
		
		
		 try{
            DB::table('clientes')->insert([
		    'id' => 101175,
			'nombre' => 'SEMILLAS Y AGROPRODUCTOS MONSANTO',
			'rgb' => '#BC8F8F',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
		
		try{
            DB::table('clientes')->insert([
		    'id' => 1007911,
			'nombre' => 'BEDACOM, SA DE CV',
			'rgb' => '#FFCCE5',
			'created_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' =>	Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		}
		catch(\Exception $e){
                             //Continua
        }
    }
}
