<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
     protected $fillable = [
	   'id', 
	   'nombre',
	   'created_at',
	   'updated_at',
	   ];
}
