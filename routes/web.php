<?php

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::post('/', 'PagesController@crear')->name('notas.crear');

Route::get('fotos', 'PagesController@fotos')->name('foto');

Route::get('blog', 'PagesController@blog')->name('noticias');

Route::get('nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('bienvenido', function () {
    return 'Hola Bienvenido...!';
});

Route::get('fotos/{numero?}', function($numero = 'Sin numero') {
    return "Foto nro $numero";
})->where('numero','[0-9]+');

//Route::view('galeria', 'fotos');

Route::get('galeria', function () {
    return view('fotos', [
        'numero' => 125
        ]);
});
*/

/*
Route::get('fotos', function () {
    return view('fotos');
})->name('foto');
*/


/*
Route::get('blog', function () {
    return view('blog');
})->name('noticias');
*/



/*
Route::get('nosotros/{nombre?}', function ($nombre = null) {
    $equipo = [
    	'Wilson Castillo',
    	'Roxana Castillo',
    	'Vanessa Castillo'
    ];
    
    //return view('nosotros', ['equipo' => $equipo, 'nombre' => $nombre]);

    return view('nosotros', compact('equipo', 'nombre'));
})->name('nosotros');
*/

