<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referente;

class SeccionReferenteController extends Controller
{
    public function index(){
    	$referentes = Referente::orderBy('orden', 'asc')->get();

    	return view('page.referentes.index', compact('referentes'));
    }
}
