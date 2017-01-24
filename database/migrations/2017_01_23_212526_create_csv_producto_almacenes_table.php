<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsvProductoAlmacenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
       {
        Schema::create('csv_producto_almacenes', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('empresa');
            $table->foreign('empresa')->references('id')->on('empresas');
            $table->integer('Cliente');	
            $table->string('Producto');	
            $table->string('DescripciondeProducto');	
            $table->string('Ubicacion');	
            $table->string('FCaducidad');	
            $table->string('LoteCliente');	
            $table->string('LTarima');	
            $table->string('EnPreparacion');	
            $table->string('EnRecibo');	
            $table->string('CantidadRetenida');	
            $table->string('CodigodeRetencion');	
            $table->string('CantidadDisponible');	
            $table->string('CantidadTotal');	
            $table->string('FechadeRecibo');
            $table->string('Entrada');
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
        Schema::dropIfExists('csv_producto_almacenes');
    }
}
