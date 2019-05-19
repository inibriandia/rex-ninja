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

// Route de la page principal
// Cette route va declencher l'execution de la page 'index' du controlleur
Route::get('/', 'PagesController@index');

// Route permettant de faire toutes les requetes
// Le controlleur 'EvenementsController' va etre appele et la fonction correspondante va etre execute
Route::resource('evenements', 'EvenementsController');


// Endpoint de Ange
// gerer la fonction indiquerChoix du controlleur PagesController
Route::get('/select', 'PagesController@indiquerChoix');

// Nouvelle route pour résoudre le probleme du 2è endpoint
Route::get('/evenements/{age}/{typeActivite}/{categorie}/{temps}/{prix}', 'userEventsController@index');



