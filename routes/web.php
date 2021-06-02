<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'GeneralController@showLogin');

Route::get('/registerfood', 'GeneralController@registerFood');

Route::post('/guardaalimento', 'GeneralController@savefood');

Route::post('/borraralimento/{id}', 'GeneralController@deleteFood');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
