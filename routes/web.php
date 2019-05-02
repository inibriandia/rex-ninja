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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PagesController@index');

Route::resource('evenements', 'EvenementsController');

Route::resource('villes', 'VillesController');

Route::get('/EP2', 'PagesController@index');
//>>>>>>> 2d932e06d4ca4675bcc971ab252403b089e9421c
