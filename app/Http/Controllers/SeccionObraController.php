<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\GaleriaObra;

class SeccionObraController extends Controller
{
    public function index()
    {
    	$obras = Obra::orderBy('orden', 'asc')->get();
    	return view('page.obras.index', compact('obras'));
    }

    public function show($id)
    {
		$obra    = Obra::find($id);
		$galeria = GaleriaObra::where('obra_id', $obra->id)->orderBy('orden', 'asc')->get();

    	return response()->json(array("text"=>"Cargó satisfactoriamente", 
									  "obra"=>$obra, 
									  "galeria"=>$galeria));
    }
}
