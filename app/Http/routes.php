<?php

Route::get('/', function (){
	return view('welcome');
});

Route::get('/admin', function (){
	return view('prueba');
});

Route::get('/otro', function (){
	return view('otro');
});


