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
	route::resource('empresas','EmpresasController');
});

Route::group(['prefix'=>'agenda','middleware'=>'auth'],function(){
	
	route::get('agenda',[
		'uses' =>'AgendaController@index',
		'as'   =>	'agenda.index'
	]);

	route::get('agenda/modalNuevo',[
		'uses' =>'AgendaController@modalNuevo',
		'as'   =>	'agenda.modalNuevo'
	]);

	route::get('agenda/{id}/detalle',[
		'uses' =>'AgendaController@detalle',
		'as'   =>	'agenda.detalle'
	]);

	route::get('agenda/add',[
		'uses' =>'AgendaController@add',
		'as'   =>	'agenda.add'
	]);

	route::get('agenda/actividadAdd',[
		'uses' =>'AgendaController@actividadAdd',
		'as'   =>	'agenda.actividadAdd'
	]);

	route::get('agenda/{id}/finalizarAgenda',[
		'uses' =>'AgendaController@finalizarAgenda',
		'as'   =>	'agenda.finalizarAgenda'
	]);

	route::resource('empresas','AgendaController');

});