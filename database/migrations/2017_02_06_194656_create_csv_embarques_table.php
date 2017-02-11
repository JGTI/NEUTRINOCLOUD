<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsvEmbarquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csv_embarques', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('tipo');
            $table->foreign('tipo')->references('id')->on('csv_tipos');
			$table->integer('empresa');
            $table->foreign('empresa')->references('id')->on('empresas');
			$table->integer('Cliente');
            $table->string('Numerodeorden');
            $table->string('ReferenciaCliente');
            $table->string('NombreConsignatario');
            $table->string('CantidadEmbarcada');
            $table->string('FechaProcesada');
            $table->string('Tipodeunidad');
            $table->string('Agranel/Paletizado');
            $table->string('Inb/Outb');
            $table->string('Operador');
            $table->string('Fecha/Hora');
            $table->string('Flujodelproceso');
            $table->string('Sellos1');
            $table->string('Sellos2');
            $table->string('TempFrente');
            $table->string('TempMedio');
            $table->string('TempAtras');
            $table->string('CantyTipodeTarima');
            $table->string('NombreChofer');
            $table->string('ON_LOAD');			
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
        Schema::dropIfExists('csv_embarques');
    }
}
