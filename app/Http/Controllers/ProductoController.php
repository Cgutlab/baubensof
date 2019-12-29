<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Redirect;
use App\GaleriaProducto;
use App\Etiqueta;


class ProductoController extends Controller
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
        $productos = Producto::orderBy('orden', 'asc')->get();
        return view('adm.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.productos.create');
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

        $file_save = Helpers::saveImage($request->file('file_image'), 'productos');
        $file_save ? $datos['file_image'] = $file_save : false;
        
        if(Producto::create($datos))
            return redirect('adm/productos/producto')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect('adm/productos/producto')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('adm.productos.edit', compact('producto'));
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
        $producto  = Producto::find($id);
        $datos     = $request->all();
        $file_save = Helpers::saveImage($request->file('file_image'), 'productos');
        $file_save ? $datos['file_image'] = $file_save : false;       
        $producto->fill($datos);

        if($producto->save())
            return  redirect('adm/productos/producto')->with('alert', "Registro actualizado exitósamente" );
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
        $producto = Producto::find($id);

        if($producto->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }


    /**
     * Crea la galeria de un producto
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galeriaCreate($id)
    {
        $producto = Producto::find($id);
        return view('adm.productos.galeria.create', ['producto' => $producto]);

    }

    /**
     * Almacenar la galeria de un producto
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galeriaStore(Request $request)
    {
        $producto_id = $request->producto_id;
        $datos       = $request->all();
        $status      = 0;

        foreach($request->file('file_image') as $img){
            $file_save = Helpers::saveImage($img, 'galeria_productos');
            $file_save ? $datos['file_image'] = $file_save : false;

            $galeria              = new GaleriaProducto;
            $galeria->producto_id = $producto_id;
            $galeria->file_image  = $file_save;
            $galeria->orden       = $request->orden;

            if($galeria->save())
                $status = 1;
            else
                return redirect('adm/productos/producto')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
        }

        $producto = Producto::find($producto_id);
        $producto->galeria = 1;
        $producto->save();

        
        if($status==1)
            return redirect('adm/productos/producto')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect('adm/productos/producto')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }

    /**
     * Ver la galeria de un producto
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galeriaView($id)
    {
        $producto = Producto::where('id', $id)->with('galerias')->first();
        return view('adm.productos.galeria.show', ['producto' => $producto]);
    }

    /**
     * Eliminar imagen
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galeriaDelete($id)
    {
        $galeria  = GaleriaProducto::find($id);
        $producto = Producto::find($galeria->producto->id);
        $path     = $galeria->file_image;

        \File::exists(public_path('images/productos_galeria/'.$galeria->file_image));

        if($galeria->delete()){
            \File::delete(public_path('images/productos_galeria/'.$path));
            $galeria = GaleriaProducto::where('producto_id', $producto->id)->get();
            if($galeria->count()==0){
                $producto->galeria = 0;
                $producto->save();
                return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
            }
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        }else{
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
        }
    }

      /**
     * Crea la etiqueta de un producto
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function etiquetaCreate($id)
    {
        $producto = Producto::find($id);
        $tipos    = ['modelo' => 'Modelo', 'ventaja' => 'Ventaja', 'tipologia' => 'Tipología'];
        return view('adm.productos.etiquetas.create', ['producto' => $producto, 'tipos' => $tipos]);

    }

    /**
     * Almacenar la etiqueta de un producto
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function etiquetaStore(Request $request)
    {    
        $producto_id = $request->producto_id;
        $datos       = $request->all();

        $file_save = Helpers::saveImage($request->file('file_image'), $datos['tipo']);
        $file_save ? $datos['file_image'] = $file_save : false;


        $etiqueta              = new Etiqueta;
        $etiqueta->producto_id = $request->producto_id;
        $etiqueta->file_image  = $file_save;
        $etiqueta->orden       = $request->orden;
        $etiqueta->nombre      = $request->nombre;
        $etiqueta->tipo        = $request->tipo;

        $producto = Producto::find($producto_id);
        $producto->etiquetas = 1;
        $producto->save();

        if($etiqueta->save())
            return redirect('adm/productos/producto')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect('adm/productos/producto')->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }

    /**
     * Ver las etiquetas de un producto
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EtiquetaView($id)
    {
        $producto  = Producto::where('id', $id)->with('etiquetas')->first();
        $etiquetas = Etiqueta::where('producto_id', $producto->id)->orderBy('tipo', 'asc')->orderBy('orden', 'desc')->get();
        $tipos     = ['modelo' => 'Modelo', 'ventaja' => 'Ventaja', 'tipologia' => 'Tipología'];

        return view('adm.productos.etiquetas.show', ['producto' => $producto, 'etiquetas' => $etiquetas]);
    }

    /**
     * Eliminar imagen
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function etiquetaDelete($id)
    {
        $etiqueta = Etiqueta::find($id);
        $producto = Producto::find($etiqueta->producto->id);
        $path     = $etiqueta->file_image;

        \File::exists(public_path('images/'.$etiqueta->tipo.'/'.$etiqueta->file_image));

        if($etiqueta->delete()){
            \File::delete(public_path('images/'.$etiqueta->tipo.'/'.$path));
            $etiqueta = Etiqueta::where('producto_id', $producto->id)->get();
            if($etiqueta->count()==0){
                $producto->etiquetas = 0;
                $producto->save();
                return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
            }
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        }else{
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
        }
    }   
}
