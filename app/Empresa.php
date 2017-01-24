<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
     protected $fillable = [
	   'id', 
	   'nombre',
	   'region',
	   'status',
	   'created_at',
	   'updated_at',
	   ];
}
