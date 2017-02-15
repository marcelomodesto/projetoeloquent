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

Route::get('/', function () {
    return view('welcome');
});


 // Rota para url '/editoras'
Route::get('/editoras', 'EditorasController@index');


// Rota para url 'editoras/1', por exemplo
Route::get('/editoras/{editora}', 'EditorasController@show');
