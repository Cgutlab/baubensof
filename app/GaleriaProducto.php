<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriaProducto extends Model
{
	protected $table = "galeria_productos";

    protected $fillable = [
    	'orden', 'file_image'
    ];


	public function producto()
	{
		return $this->belongsTo('App\Producto', 'producto_id', 'id');
	}
}
