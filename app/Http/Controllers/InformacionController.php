<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informacion;

class InformacionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    {
        $informacion = Informacion::first();
        return view('adm.contacto.informacion.index', compact('informacion'));
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function editContacto($id)
    {
        $informacion = Informacion::find($id);
        return view('adm.contacto.informacion.edit', compact('informacion'));
    }


    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function redes()
    {
        $informacion = Informacion::first();
        return view('adm.contacto.redes.index', compact('informacion'));
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function editRedes($id)
    {
        $informacion = Informacion::find($id);
        return view('adm.contacto.redes.edit', compact('informacion'));
    }


    public function update(Request $request, $id){
        $informacion = Informacion::find($id);
        $informacion->fill($request->all());

        if($request->action=='contacto')
            $path = 'adm/informacion/contacto';
        elseif($request->action=='redes')
            $path = 'adm/informacion/redes';

        if($informacion->save())
            return redirect($path)->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }
}
