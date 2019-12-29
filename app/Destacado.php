<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destacado extends Model
{
    protected $fillable = [
    	'file_image', 'orden' 
    ];

	public function metadatos()
	{
		return $this->belongsTo('App\Metadato', 'metadato_id');
	}
}
