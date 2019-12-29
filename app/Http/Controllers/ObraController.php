<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\GaleriaObra;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Redirect;



class ObraController extends Controller
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
        $obras = Obra::orderBy('orden', 'asc')->get();
        return view('adm.obras.index', compact('obras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.obras.create');
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

        $file_save = Helpers::saveImage($request->file('file_image'), 'obras');
        $file_save ? $datos['file_image'] = $file_save : false;
        
        if(Obra::create($datos))
            return redirect('adm/obras/obra')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect('adm/obras/obra')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
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
        $obra = Obra::find($id);
        return view('adm.obras.edit', compact('obra'));
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
        $obra    = Obra::find($id);
        $datos     = $request->all();
        $file_save = Helpers::saveImage($request->file('file_image'), 'obras');
        $file_save ? $datos['file_image'] = $file_save : false;       
        $obra->fill($datos);

        if($obra->save())
            return  redirect('adm/obras/obra')->with('alert', "Registro actualizado exitósamente" );
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
        $obra = Obra::find($id);

        if($obra->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }


    /**
     * Crea la galeria de un obra
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galeriaCreate($id)
    {
        $obra = Obra::find($id);
        return view('adm.obras.galeria.create', ['obra' => $obra]);

    }

    /**
     * Almacenar la galeria de un obra
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galeriaStore(Request $request)
    {
        $obra_id = $request->obra_id;
        $datos   = $request->all();
        $status  = 0;

        foreach($request->file('file_image') as $img){
            $file_save = Helpers::saveImage($img, 'galeria_obras');
            $file_save ? $datos['file_image'] = $file_save : false;

            $galeria = new GaleriaObra;
            $galeria->obra_id    = $obra_id;
            $galeria->file_image = $file_save;
            $galeria->orden      = $request->orden;

            if($galeria->save())
                $status = 1;
            else
                return redirect('adm/obras/obra')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
        }

        $obra = Obra::find($obra_id);
        $obra->galeria = 1;
        $obra->save();

        
        if($status==1)
            return redirect('adm/obras/obra')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect('adm/obras/obra')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }

    /**
     * Ver la galeria de un obra
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galeriaView($id)
    {
        $obra = Obra::where('id', $id)->with('galerias')->first();
        return view('adm.obras.galeria.show', ['obra' => $obra]);
    }

    /**
     * Eliminar imagen
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galeriaDelete($id)
    {
        $galeria = GaleriaObra::find($id);
        $obra    = Obra::find($galeria->obra->id);
        $path    = $galeria->file_image;

        \File::exists(public_path('images/obras/galeria/'.$galeria->file_image));

        if($galeria->delete()){
            \File::delete(public_path('images/obras/galeria/'.$path));
            $galeria = GaleriaObra::where('obra_id', $obra->id)->get();
            if($galeria->count()==0){
                $obra->galeria = 0;
                $obra->save();
                return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
            }
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        }else{
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
        }
    }   
}
