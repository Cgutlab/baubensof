<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'orden', 'nombre', 'keyword', 'descripcion', 'file_image', 'galeria', 'etiquetas'
    ];

    // 
    public function galerias()
    {
        return $this->hasMany('App\GaleriaProducto', 'producto_id', 'id');
    }

    // 
    public function etiquetas()
    {
        return $this->hasMany('App\Etiqueta');
    }

    // 
    public function modelos()
    {
        return $this->hasMany('App\Modelo');
    }

    // 
    public function tipologias()
    {
        return $this->hasMany('App\Tipologia');
    }

    // 
    public function ventajas()
    {
        return $this->hasMany('App\Ventaja');
    }

}