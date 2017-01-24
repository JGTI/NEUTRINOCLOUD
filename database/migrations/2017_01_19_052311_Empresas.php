<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 
     public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->integer('id');
			$table->primary('id');
			$table->string('nombre');
			$table->integer('region');
            $table->foreign('region')->references('id')->on('regiones');
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
        Schema::dropIfExists('empresas');
    }
}
