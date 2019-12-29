<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
    	'file_image', 'titulo1', 'titulo2', 'descripcion', 'slogan' 
    ];
}