<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperatura extends Model
{
    protected $fillable = [
	   'id', 
	   'almacen',
	   'temperatura',
	   'created_at',
	   'updated_at',
	   ];
}
