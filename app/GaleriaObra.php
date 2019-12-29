<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriaObra extends Model
{
	protected $table = "galeria_obras";

    protected $fillable = [
    	'orden', 'file_image'
    ];


	public function obra()
	{
		return $this->belongsTo('App\Obra', 'obra_id', 'id');
	}

}
