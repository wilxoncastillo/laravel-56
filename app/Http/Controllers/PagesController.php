<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio() {
    	return view('welcome');
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
