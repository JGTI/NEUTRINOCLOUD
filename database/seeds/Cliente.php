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
      try{DB::table("clientes")->insert(["id" =>	1	,	"nombre" => "FREXPORT, SA DE CV","rgb" => "#2E8B57","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>7,"nombre" => "Nestle Servicios Industriales","rgb" => "#A0522D","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>15,"nombre" => "PILGRIMｴS PRIDE S DE RL DE CV","rgb" => "#C0C0C0","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>19,"nombre" => "MARBRAN S.A DE C.V. PLANTA 2","rgb" => "#87CEEB","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>39,"nombre" => "BACHOCO SA DE CV","rgb" => "#6A5ACD","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>68,"nombre" => "FRIGORIZADOS LA HUERTA SA CV","rgb" => "#00FF7F","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>85,"nombre" => "EXPORTADORA DE HORTALIZAS","rgb" => "#4682B4","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>96,"nombre" => "EXPOR SAN ANTONIO SA DE CV","rgb" => "#D2B48C","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>157,"nombre" => "ARNIME S.A. DE C.V.","rgb" => "#008080","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>160,"nombre" => "CITROFRUT SA DE CV","rgb" => "#008080","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>168,"nombre" => "CONG. Y EMPAC. NACIONAL S.A.","rgb" => "#D8BFD8","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>209,"nombre" => "MARBRAN S.A DE C.V. PLANTA 3","rgb" => "#FF6347","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>226,"nombre" => "SCHREIBER MEXICO S.A. DE C.V.","rgb" => "#40E0D0","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>254,"nombre" => "COMERC. PORCICOLA MEX SA DE CV","rgb" => "#EE82EE","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>282,"nombre" => "FREXPORT SA DE CV","rgb" => "#F5DEB3","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>309,"nombre" => "EMPACADORA CELAYA S.A DE C.V.","rgb" => "#FFFF00","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>408,"nombre" => "SIGMA ALIMENTOS IMPORT SA CV","rgb" => "#FFFF00","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>423,"nombre" => "INTERPEC DE SAN MARCOS SA CV","rgb" => "#9ACD32","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>479,"nombre" => "COVEMEX SA DE CV","rgb" => "#00FFFF","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>678,"nombre" => "MC CAIN DE MEXICO, SA DE CV","rgb" => "#00FFFF","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>689,"nombre" => "PINNACLE FOODS GROUP LIC","rgb" => "#00008B","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>993,"nombre" => "SUKARNE SA DE CV","rgb" => "#008B8B","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>1146,"nombre" => "FRIGORIZADOS LA HUERTA SA CV","rgb" => "#B8860B","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>1153,"nombre" => "MAR BRAN SA DE CV PLANTA 5","rgb" => "#006400","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>1385,"nombre" => "DRISCOLLｴS VIVEROS SA CV","rgb" => "#BDB76B","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>1489,"nombre" => "MAR BRAN SA DE CV PLANTA 1","rgb" => "#8B008B","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>1722,"nombre" => "CARGILL DE MEXICO SA DE CV","rgb" => "#556B2F","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2002,"nombre" => "XTRA CONGELADOS NATURALES SA","rgb" => "#FF8C00","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2003,"nombre" => "XTRA CONGELADOS NAT SA DE CV J","rgb" => "#9932CC","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2006,"nombre" => "PROCESADORA RIO NUEVO SA DE CV","rgb" => "#8B0000","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2043,"nombre" => "AGRANA FRUIT MEXICO SA DE CV","rgb" => "#E9967A","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2046,"nombre" => "AGRANA FRUIT MEXICO SA DE CV","rgb" => "#8FBC8F","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2184,"nombre" => "SIGMA ALIMENTOS LACTEOS","rgb" => "#483D8B","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2189,"nombre" => "GRANJERO FELIZ, S DE RL DE CV","rgb" => "#2F4F4F","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2264,"nombre" => "SPECIALITES PET FOOD SA DE CV","rgb" => "#00CED1","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2326,"nombre" => "INDUBA PAVOS S.A DE C.V.","rgb" => "#9400D3","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2332,"nombre" => "KOPPERT PRODUCCION MEXICO","rgb" => "#FF1493","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2460,"nombre" => "GRUPO ATLANTIMEX S.A. DE C.V.","rgb" => "#00BFFF","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2612,"nombre" => "FUNDACION NUTRICION VIDA AC","rgb" => "#1E90FF","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2663,"nombre" => "CADENA COMERCIAL OXXO SA CV","rgb" => "#B22222","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2703,"nombre" => "XO Del Centro","rgb" => "#228B22","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2770,"nombre" => "VICERAS SELECTAS DEL BAJIO, SA DE CV","rgb" => "#FFD700","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2771,"nombre" => "RANCHO VISTALEGRE SPR DE RL CV","rgb" => "#DAA520","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2784,"nombre" => "TECNOFRUIT SA DE CV","rgb" => "#808080","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>2802,"nombre" => "CITROLIM SA DE CV","rgb" => "#008000","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100000,"nombre" => "FREXPORT SA DE CV","rgb" => "#008000","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100015,"nombre" => "TYSON ALIMENTOS S DE RL DE CV","rgb" => "#ADFF2F","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100016,"nombre" => "EXPORTADORA DE HORTALIZAS","rgb" => "#FF69B4","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100017,"nombre" => "EXPOR SAN ANOTNIO, SA DE CV","rgb" => "#CD5C5C","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100043,"nombre" => "EMP DILUSA DE AGSC","rgb" => "#4B0082","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100047,"nombre" => "KERRY INGREDIENTES DE MEXICO, SA DE CV","rgb" => "#F0E68C","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100053,"nombre" => "Interpec San Marcos","rgb" => "#7CFC00","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100060,"nombre" => "CITROJUGO","rgb" => "#FFFACD","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100065,"nombre" => "UNILEVER DE MﾉXICO","rgb" => "#ADD8E6","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100104,"nombre" => "SUKARNE, SA DE CV","rgb" => "#F08080","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100122,"nombre" => "CONAGRA FOODS MEXICO, SA DE CV","rgb" => "#E0FFFF","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100147,"nombre" => "DISTRIBUIDORA DE CARNE DEL BAJIO, SA DE CV","rgb" => "#FAFAD2","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100185,"nombre" => "CITRICOS EX","rgb" => "#90EE90","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100189,"nombre" => "SIGMA ALIMENTOS LACTEOS, SA DE CV","rgb" => "#FFB6C1","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100193,"nombre" => "AYVI, SA DE CV","rgb" => "#FFA07A","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100261,"nombre" => "SIGMA ALIMENTOS COMERCIAL","rgb" => "#20B2AA","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100280,"nombre" => "GRANJERO FELIZ, SA DE CV","rgb" => "#87CEFA","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100310,"nombre" => "EMPACADORA BONNACARNE, SA DE CV","rgb" => "#FFFFE0","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100400,"nombre" => "DIST. SIMPLOT DE ALIMENTOS CON","rgb" => "#00FF00","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100432,"nombre" => "CARNES SELECTAS TANGAMANGA, SA DE CV","rgb" => "#00FF00","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100453,"nombre" => "QUALTIA ALIMENTOS OPERACIONES","rgb" => "#32CD32","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100522,"nombre" => "VERFRUCO DE MEXICO","rgb" => "#FF00FF","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100550,"nombre" => "INTROPACIFICO DEL MAR","rgb" => "#FF00FF","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100622,"nombre" => "PANARTE, SA DE CV","rgb" => "#800000","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100674,"nombre" => "PROD CARNICOS DE OCCIDENTE","rgb" => "#66CDAA","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100689,"nombre" => "PINNACLE FOODS GROUP LLC","rgb" => "#0000CD","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100731,"nombre" => "RANCHO VISTALEGRE, S PR DE RL DE CV","rgb" => "#BA55D3","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100742,"nombre" => "TECNOFRUIT, SA DE CV","rgb" => "#9370DB","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100810,"nombre" => "XTRA CONGELADOS NATURALES (JR)","rgb" => "#3CB371","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100820,"nombre" => "Gpo Indsustrial Pesquero","rgb" => "#7B68EE","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100877,"nombre" => "COMERCIAL NORTEAMERICANA S DE","rgb" => "#00FA9A","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100918,"nombre" => "PROC. DE CAMARON Y ALIM. D MAR","rgb" => "#48D1CC","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100921,"nombre" => "DISTRIBUIDORA PEPE FILETE DEL CENTRO, SA DE CV","rgb" => "#C71585","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100960,"nombre" => "PROTEINA ANIMAL, SA DE CV","rgb" => "#191970","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100966,"nombre" => "ROMO MUﾑOZ ROBERTO","rgb" => "#FFE4B5","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100988,"nombre" => "MIGUEL ANGEL MEDEZ GAYTAN","rgb" => "#FFDEAD","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>100992,"nombre" => "CADENA COMERCIAL OXXO","rgb" => "#000080","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101027,"nombre" => "PASTEURIZADORA DE LEON","rgb" => "#000080","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101033,"nombre" => "ALIMENTOS SBF DE MEXICO","rgb" => "#808000","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101038,"nombre" => "DOHLER MEXICO SA DE CV","rgb" => "#808000","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101039,"nombre" => "SAN MIGUEL ALIMENTOS, S DE RL DE CV","rgb" => "#6B8E23","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101075,"nombre" => "JARDIN ALEMAN, SA DE CV","rgb" => "#FFA500","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101078,"nombre" => "FERRERO ROCHER","rgb" => "#FF4500","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101082,"nombre" => "DISTRIBUIDORA BAHIA KINO, SA DE CV","rgb" => "#DA70D6","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101093,"nombre" => "ONDUSTRIA CARNICOS STRATEGA, SA DE CV","rgb" => "#EEE8AA","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101097,"nombre" => "FABRICA DE MERMELADAS, SA DE CV","rgb" => "#98FB98","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101099,"nombre" => "ANA LAURA MUJICA JONGUITUD","rgb" => "#AFEEEE","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101104,"nombre" => "FRESHCOURT, S DE RL DE CV","rgb" => "#DB7093","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101124,"nombre" => "PRODUCTO ALIMENTICIOS DIETETICOS RELAMPAGO","rgb" => "#CD853F","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101128,"nombre" => "GPO IND Y COM DEL NORESTE, SA DE CV","rgb" => "#FFC0CB","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101133,"nombre" => "NORA ILEANA VIDAURRI DAMM","rgb" => "#DDA0DD","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101139,"nombre" => "AGROPECUARIA BLUE VALLEY, SPR","rgb" => "#B0E0E6","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101147,"nombre" => "ALIMENTOS PROFUSA, SA DE CV","rgb" => "#800080","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101175,"nombre" => "SEMILLAS Y AGROPRODUCTOS MONSANTO","rgb" => "#800080","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101191,"nombre" => "ARLANDA, SA DE CV","rgb" => "#FF0000","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>101202,"nombre" => "SERCICIOS ALIMENTICIOS PROETINICOS, SC","rgb" => "#BC8F8F","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>1000001,"nombre" => "FREXPORT (NANCHI), SA DE CV","rgb" => "#4169E1","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>1007911,"nombre" => "BEDACOM, SA DE CV","rgb" => "#8B4513","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>1008101,"nombre" => "XTRA CONGELADOS NATURALES ","rgb" => "#FA8072","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
try{DB::table("clientes")->insert(["id" =>1009601,"nombre" => "PROTEINA ANIMAL, SA DE CV (Cárnico)","rgb" => "#F4A460","created_at" => Carbon::now()->format("Y-m-d H:i:s"),"updated_at" => Carbon::now()->format("Y-m-d H:i:s")]);}catch(\Exception $e){/*Continua*/}
 
}
}
