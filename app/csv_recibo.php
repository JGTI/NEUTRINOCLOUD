<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class csv_recibo extends Model
{
    protected $fillable = [
	   'id', 
	   'tipo', 
	   'empresa',
	   'Cliente',
	   'NumerodeRecibo',
	   'ReferenciaRecibo',
	   'CantidadRecibida',
	   'FechadeProceso',
	   'TipodeUnidad',
	   'AgranelPaletizado',
	   'CantTipoTar',
	   'InbOutb',
	   'Operador',
	   'FechaHora',
	   'FlujoProceso',
	   'Sellos1',
	   'Sellos2',
	   'TempFrente',
	   'TempMedio',
	   'TempAtrás',
	   'TempPromedio',
	   'NombreChofer',
	   'Transporte',
	   'status',
	   'created_at',
	   'updated_at',
	   ];
}
