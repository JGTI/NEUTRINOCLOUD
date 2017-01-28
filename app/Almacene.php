<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacene extends Model
{
    protected $fillable = [
	   'id', 
	   'nombre',
	   'status',
	   'empresa',
	   'created_at',
	   'updated_at',
	   ];
	   
}
