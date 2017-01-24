<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class csv_producto_almacene extends Model
{
     protected $fillable = [
	   'id', 
	   'empresa',
	   'Cliente',
	   'Producto',
	   'DescripciondeProducto',
	   'Ubicacion',
	   'FCaducidad',
	   'LoteCliente',
	   'LTarima',
	   'EnPreparacion',
	   'EnRecibo',
	   'CantidadRetenida',
	   'CodigodeRetencion',
	   'CantidadDisponible',
	   'CantidadTotal',
	   'FechadeRecibo',
	   'Entrada',
	   'status',
	   'created_at',
	   'updated_at',
	   ];
}
