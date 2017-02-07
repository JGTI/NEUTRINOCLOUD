<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class csv_tipos extends Model
{
    protected $fillable = [
	   'id', 
	   'nombre',
	   'created_at',
	   'updated_at',
	   ];
}
