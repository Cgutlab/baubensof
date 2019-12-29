<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SeccionContactoRequest;
use Mail;
use App\Producto;

class SeccionContactoController extends Controller
{
    public function index(){
        $mensaje = '';
    	return view('page.contacto.index', compact('mensaje'));
    }

    public function store(SeccionContactoRequest $request)
    {
    	$data = array(['nombre'   => $request->get('nombre'),
								    		'apellido' => $request->get('apellido'),
								    		'empresa'  => $request->get('empresa'),
								    		'email'    => $request->get('email'),
								    		'mensaje'  => $request->get('mensaje')]);
    	Mail::send('page.contacto.email.contacto', $data[0], function($message){
	    		$message->subject('Te han enviado un mensaje desde Supply Argentina');
	    		$message->to(env('ADMIN_MAIL'));
	    	}
	    );

    	return redirect()->back()->with('alert', '¡Gracias por contactarnos!');
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        $mensaje  = 'Me intera el producto '.$producto->nombre.'. Por favor contáctenme.';
        return view('page.contacto.index', compact('mensaje'));
    }
}
