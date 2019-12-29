<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadato extends Model
{
    protected $fillable = [
    	'seccion', 'keyword','descripcion' ,'url' 
    ];

	public function destacado()
    {
        return $this->hasOne('App\Destacado', 'metadato_id', 'id');
    }
}

