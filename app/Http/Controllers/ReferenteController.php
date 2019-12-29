<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referente;

class ReferenteController extends Controller
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
        $referentes = Referente::orderBy('orden', 'asc')->get();

        return view('adm.referentes.index', compact('referentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.referentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();

        if(Referente::create($datos))
             return redirect('adm/referentes/ref')->with('alert', "Registro almacenado exitósamente" );
        else
             return redirect()->back()->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $referente = Referente::find($id);
        return view('adm.referentes.edit', compact('referente'));
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
        $referente = Referente::find($id);
        $datos     = $request->all();
      
        $referente->update($datos);

        if($referente->save())
             return redirect('adm/referentes/ref')->with('alert', "Registro actualizado exitósamente" );
        else
             return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $referente = Referente::find($id);

        if($referente->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }
}
