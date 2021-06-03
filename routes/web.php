<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'GeneralController@showLogin');


/* CRUD Alimentos */
//Registrar un alimento
Route::get('/registerfood', 'GeneralController@registerFood');

//Guardar un alimento
Route::post('/guardaalimento', 'GeneralController@savefood');

//Borrar un alimento
Route::post('/borraralimento/{id}', 'GeneralController@deleteFood');

//Editar un alimento
Route::get('/editaralimento/{id}', 'GeneralController@getFood');
Route::post('/editaralimento/{id}', 'GeneralController@saveEditFood');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


