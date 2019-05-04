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

// Route permettant de faire toutes les requetes
Route::resource('evenements', 'EvenementsController');


// Endpoint de Ange
// gerer la fonction indiquerChoix du controlleur PagesController
Route::get('/select', 'PagesController@indiquerChoix');



Route::resource('villes', 'VillesController');
Route::resource('pays', 'PaysController');
Route::resource('prov', 'ProvincesController');
