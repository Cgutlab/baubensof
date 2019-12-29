<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $fillable = [
    	'file_image', 'nombre', 'orden', 'descripcion', 'galeria'
    ];

    // 
	public function galerias()
    {
        return $this->hasMany('App\GaleriaObra', 'obra_id', 'id');
    }
}