<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
     protected $fillable = [
	   'id', 
	   'nombre',
	   'created_at',
	   'updated_at',
	   ];
}
