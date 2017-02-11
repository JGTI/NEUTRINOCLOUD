<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    protected $fillable = [
	   'id', 
	   'empresa'
	   'tipo'
	   'descripcion'
	   'status'
	   'created_at',
	   'updated_at',
	   ];
}

