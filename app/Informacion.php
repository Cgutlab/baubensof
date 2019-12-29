<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    protected $fillable = [
    	'direccion', 'telefono1', 'telefono2', 'email', 'twitter', 'facebook', 
    ];
}