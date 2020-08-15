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
//rutas

Route::get('/', function () {
    return view('welcome');
});
Route::get('/empresa', function () {
    return view('empresa');
});

Route::get('/contratos', function () {
    return view('contratos');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});


Route::get('/estadistica', function () {
    return view('estadistica');
});

Route::get('/tables', function () {
    return view('tables');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

