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

Route::get('/inicio', function () {
    return view('welcome');
})->name('inicio');

Route::get('/test', function () {
    return view('pruebas');
})->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicial', 'SesionController@index')->name('inicial');



Route::group(['prefix'=>'empresas','middleware'=>'auth'],function(){
	
	route::get('sociedades',[
		'uses' =>'EmpresasController@sociedadesIndex',
		'as'   =>	'empresas.sociedades'
	]);

	route::get('agenda',[
		'uses' =>'EmpresasController@agendaIndex',
		'as'   =>	'empresas.agenda'
	]);

	route::get('agenda/modalNuevo',[
		'uses' =>'EmpresasController@agendaModalNuevo',
		'as'   =>	'empresas.agendaModalNuevo'
	]);

	route::get('agenda/detalle',[
		'uses' =>'EmpresasController@agendaDetalle',
		'as'   =>	'empresas.agendaDetalle'
	]);

	
	route::resource('empresas','EmpresasController');

});