<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Redirect;


class SliderController extends Controller
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
        $sliders = Slider::orderBy('orden', 'asc')->get();
        return view('adm.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $secciones = ['home' => 'Home', 'empresa' => 'Quienes Somos', ];
        return view('adm.sliders.create', compact('secciones'));

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

        $file_save = Helpers::saveImage($request->file('file_image'), 'sliders');
        $file_save ? $datos['file_image'] = $file_save : false;
        
        if(Slider::create($datos))
            return redirect('adm/sliders')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect('adm/sliders')->with('errors', "Ocurrió un error al intentar actualizar el registro" );

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
        $secciones = ['home' => 'Home', 'empresa' => 'Quienes Somos', ];
        $slider    = Slider::find($id);
        return view('adm.sliders.edit', compact('secciones', 'slider'));
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
        $slider    = Slider::find($id);
        $datos     = $request->all();
        $file_save = Helpers::saveImage($request->file('file_image'), 'sliders');
        $file_save ? $datos['file_image'] = $file_save : false;       
        $slider->fill($datos);

        if($slider->save())
            return  redirect('adm/sliders')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
