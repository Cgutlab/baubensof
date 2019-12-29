<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destacado;
use App\Metadato;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Redirect;

class DestacadoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destacados = Destacado::with('metadatos')->orderBy('orden', 'asc')->get();
        return view('adm.destacados.index', compact('destacados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$metadatos = Metadato::all();
		$destacado = Destacado::find($id);
        return view('adm.destacados.edit', compact('destacado', 'metadatos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
	{ 
        $destacado                        = Destacado::find($id);
        $datos                            = $request->all();
        $destacado->metadato_id           = $request->metadato_id;
        $file_save                        = Helpers::saveImage($request->file('file_image'), 'destacados');
        $file_save ? $datos['file_image'] = $file_save : false;       
        $destacado->fill($datos);

        if($destacado->save())
            return  redirect('adm/destacados')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }
}
