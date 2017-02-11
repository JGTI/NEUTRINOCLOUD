<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertas', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('empresa');
            $table->foreign('empresa')->references('id')->on('empresas');
			$table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('users');
			$table->integer('tipo');
            $table->foreign('tipo')->references('id')->on('alerta_tipos');
			$table->string('descripcion');
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
        Schema::dropIfExists('alertas');
    }
}
