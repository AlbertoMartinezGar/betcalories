<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/login', 'GeneralController@showLogin');


Route::group(['middleware' => ['role:admin']], function () {
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

    Route::get('/homeadmin', 'GeneralController@homeadmin');
});



Route::group(['middleware' => ['role:user']], function () {
    Route::get('/registraprimeralimento/{id}', 'UserController@createDay');

    Route::get('/addfood/{id}', 'UserController@addFood');

    Route::post('/addfood/{id}', 'UserController@search');

    Route::post('/savefood/{id}', 'UserController@saveFood');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


