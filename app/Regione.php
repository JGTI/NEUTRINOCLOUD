<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regione extends Model
{
     protected $fillable = [
	   'id', 
	   'nombre',
	   'status',
	   'created_at',
	   'updated_at',
	   ];
}
