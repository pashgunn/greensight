<?php

use Illuminate\Support\Facades\Route;


Route::get('/', ['uses' => 'PagesController@homepage', 'as' => 'homepage']);

Route::get('/register', ['uses' => 'RegisterController@index', 'as' => 'register.index']);
Route::post('/register', ['uses' => 'RegisterController@store', 'as' => 'register.store']);
