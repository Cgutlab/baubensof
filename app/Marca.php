<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = [
    	'nombre', 'orden', 'file_image' 
    ];
}
