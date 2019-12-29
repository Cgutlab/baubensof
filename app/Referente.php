<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referente extends Model
{
    protected $fillable = [
    	'empresa', 'encargado', 'orden', 'link'
    ];
}
