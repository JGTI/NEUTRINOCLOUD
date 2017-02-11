<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta_Tipo extends Model
{
    protected $fillable = [
	   'id', 
	   'nombre',
	   'sonido',
	   'created_at',
	   'updated_at',
	   ];
}
