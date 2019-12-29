<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Marca;
use App\Etiqueta;

class SeccionProductoController extends Controller
{
	public function index(){
		$productos = Producto::orderBy('orden', 'asc')->get();
		$marcas    = Marca::orderBy('orden', 'asc')->get();
		return view('page.productos.index', compact('productos', 'marcas'));
	}

	public function show($id){
		$producto  = Producto::find($id);
		$productos = Producto::orderBy('orden', 'asc')->get();
		$tipos     = ['modelo' => 'Modelos', 'ventaja' => 'Ventajas', 'tipologia' => 'Tipologías'];
		$etiquetas = Etiqueta::where('producto_id', $producto->id)->orderBy('orden', 'asc')->get();

		return view('page.productos.show', compact('producto', 'productos', 'tipos', 'etiquetas'));
	}
}
