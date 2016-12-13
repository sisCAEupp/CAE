<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/inicio', function() {
	return view('inicio');
});

Route::get('/',function(){
	return view('inicio');
});

Route::get('/registropacientes', function() {
	return view('registropacientes');
});

Route::get('/editarpacientes', function() {
	return view('editarpacientes');
});

Route::get('/nutricion', function() {
	return view('plannutricional');
});

Route::get('/deportiva', function() {
	return view('plandeportivo');
});