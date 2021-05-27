<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'GeneralController@showLogin');

Route::get('/registerfood', 'GeneralController@registerFood');

Route::post('/guardaalimento', 'GeneralController@savefood');

Route::delete('/borraralimento/{id}', 'GeneralController@deleteFood');