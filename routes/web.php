<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/manager', function () {
    return view('home');
});



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('/esdeveniments', 'EsdevenimentsController');



Route::get('/','EsdevenimentsController@index')->middleware('auth');


Route::get('/crear','EsdevenimentsController@create');

Route::get('/actualizar','EsdevenimentsController@update');

Route::get('/insertar','EsdevenimentsController@store');

Route::get('/borrar','EsdevenimentsController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/compres', 'CompresController');
Route::get('/crearCompres','CompresController@create');
