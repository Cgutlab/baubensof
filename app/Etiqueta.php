<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    protected $fillable = [
    	'nombre','orden', 'tipo', 'file_image'
    ];
    
	public function producto()
	{
		return $this->belongsTo('App\Producto');
	}
}
