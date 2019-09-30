<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class PagesController extends Controller
{
    public function inicio() {
    	$notas = Nota::all();

        return view('welcome', compact('notas'));
    } 

    public function detalle($id) {
        $nota = Nota::findOrFail($id);

        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request) {
        //return $request->all();

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $nota = new Nota;
        $nota->nombre = $request->nombre;
        $nota->descripcion = $request->descripcion;
        $nota->save();

        return back()->with('mensaje', 'Nota agregada...!');
    }

    public function fotos() {
    	return view('fotos');
    } 

    public function blog() {
    	return view('blog');
    } 

    public function nosotros($nombre = null) {
    	$equipo = [
	    	'Wilson Castillo',
	    	'Roxana Castillo',
	    	'Vanessa Castillo'
    	];

        return view('nosotros', compact('equipo', 'nombre'));
    } 

}
