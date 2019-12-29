<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Destacado;
use App\Producto;

class SeccionHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders    = Slider::where('seccion', 'home')->orderBy('orden', 'asc')->get();
        $destacados = Destacado::orderBy('orden', 'asc')->get();
        return view('page.home.index', compact('sliders', 'destacados'));
    }

    public function buscador(Request $request)
    {
        $busqueda  = $request->nombre;
        $resultado = Producto::where('nombre', 'like', '%'.$busqueda.'%')->get();

        return view('page.home.busqueda', ['resultado' => $resultado]);
    }
}
