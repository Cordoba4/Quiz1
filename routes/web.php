<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artistas', function () {
    //$ar =['katy Perry','Enrique Iglesias'];
    return view('pantalla1',[
     
        'artistas'=>['katy Perry','Enrique Iglesias','Ariana Grande']
    ]);
});


Route::resource('Canciones','CancionesController');