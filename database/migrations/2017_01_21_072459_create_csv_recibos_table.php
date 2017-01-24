<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsvRecibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csv_recibos', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('tipo');
            $table->foreign('tipo')->references('id')->on('csv_recibo_tipos');
			$table->integer('empresa');
            $table->foreign('empresa')->references('id')->on('empresas');
			$table->integer('Cliente');
			$table->string('NumerodeRecibo');
			$table->string('ReferenciaRecibo');
			$table->string('CantidadRecibida');
			$table->string('FechadeProceso');
			$table->string('TipodeUnidad');
			$table->string('AgranelPaletizado');	
			$table->string('CantTipoTar');
			$table->string('InbOutb');
			$table->string('Operador');	
			$table->string('FechaHora');	
			$table->string('FlujoProceso');	
			$table->string('Sellos1');	
			$table->string('Sellos2');	
			$table->string('TempFrente');	
			$table->string('TempMedio');	
			$table->string('TempAtrás');	
			$table->string('TempPromedio');	
			$table->string('NombreChofer');	
			$table->string('Transporte');
			$table->integer('status');
            $table->foreign('status')->references('id')->on('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csv_recibos');
    }
}
