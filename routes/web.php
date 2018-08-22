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
    return view('particles');
});

Route::get('/inicio', function () {
    return view('particles');
})->name('inicio');

Route::get('/manuales', function () {
    return view('manuales');
})->name('manuales');

Route::get('/test', function () {
    return view('welcome');
})->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicial', 'SesionController@index')->name('inicial');


