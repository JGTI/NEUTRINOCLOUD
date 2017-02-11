<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class csv_embarque extends Model
{
      protected $fillable = [
	   'id', 
	   'tipo', 
	   'empresa',
	   'Cliente',
	   'Numerodeorden',
	   'ReferenciaCliente',
	   'NombreConsignatario',
	   'CantidadEmbarcada',
	   'FechaProcesada',
	   'Tipodeunidad',
	   'Agranel/Paletizado',
	   'Inb/Outb',
	   'Operador',
	   'Fecha/Hora',
	   'Flujodelproceso',
	   'Sellos1',
	   'Sellos2',
	   'TempFrente',
	   'TempMedio',
	   'TempAtras',
	   'CantyTipodeTarima',
	   'NombreChofer',
	   'ON_LOAD',
	   'status',
	   'created_at',
	   'updated_at',
	   ];
}
