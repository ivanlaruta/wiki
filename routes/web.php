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
});


Route::get('/test', function () {
    return view('pruebas');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicial', 'SesionController@index');

Route::group(['prefix'=>'distribuidor','middleware'=>'auth'],function(){

	// route::get('solicitudes/enviar_parcial',[
	// 	'uses' =>'SolicitudesController@enviar_parcial',
	// 	'as'   =>	'solicitudes.enviar_parcial'
	// ]);
	
	route::get('solicitudes/{id}/enviar',[
		'uses' =>'SolicitudesController@enviar',
		'as'   =>	'solicitudes.enviar'
	]);

	// route::get('solicitudes/{id}/envio_parcial',[
	// 	'uses' =>'SolicitudesController@envio_parcial',
	// 	'as'   =>	'solicitudes.envio_parcial'
	// ]);

	// route::get('solicitudes/modal_parcial',[
	// 	'uses' =>'SolicitudesController@modal_parcial',
	// 	'as'   =>	'solicitudes.modal_parcial'
	// ]);

	// route::get('solicitudes/index_aprobados',[
	// 	'uses' =>'SolicitudesController@index_aprobados',
	// 	'as'   =>	'solicitudes.index_aprobados'
	// ]);

	route::get('solicitudes/{id}/aprobar',[
		'uses' =>'SolicitudesController@aprobar',
		'as'   =>	'solicitudes.aprobar'
	]);

	route::get('solicitudes/{id}/renovar_chassis',[
		'uses' =>'SolicitudesController@renovar_chassis',
		'as'   =>	'solicitudes.renovar_chassis'
	]);

	route::get('solicitudes/index_espera',[
		'uses' =>'SolicitudesController@index_espera',
		'as'   =>	'solicitudes.index_espera'
	]);

	route::get('solicitudes/{id}/aprobacion',[
		'uses' =>'SolicitudesController@aprobacion',
		'as'   =>	'solicitudes.aprobacion'
	]);

	route::get('solicitudes/{id}/espera',[
		'uses' =>'SolicitudesController@espera',
		'as'   =>	'solicitudes.espera'
	]);

	route::get('solicitudes/{id}/addDetalle',[
		'uses' =>'SolicitudesController@addDetalle',
		'as'   =>	'solicitudes.addDetalle'
	]);	

	route::get('solicitudes/{id}/detalle',[
		'uses' =>'SolicitudesController@detalle',
		'as'   =>	'solicitudes.detalle'
	]);

	route::get('solicitudes/{id}/{id2}/quitar_detalle',[
		'uses' =>'SolicitudesController@quitar_detalle',
		'as'   =>	'solicitudes.quitar_detalle'
	]);

	route::get('solicitudes/{id2}/{id}quitar_chassis',[
		'uses' =>'SolicitudesController@quitar_chassis',
		'as'   =>	'solicitudes.quitar_chassis'
	]);

	route::get('solicitudes/{id}editar_detalle',[
		'uses' =>'SolicitudesController@editar_detalle',
		'as'   =>	'solicitudes.editar_detalle'
	]);
	route::get('solicitudes/{id}update_detalle',[
		'uses' =>'SolicitudesController@update_detalle',
		'as'   =>	'solicitudes.update_detalle'
	]);
	
	route::get('solicitudes/{id}/{id2}/detalle_all',[
		'uses' =>'SolicitudesController@detalle_all',
		'as'   =>	'solicitudes.detalle_all'
	]);

	route::resource('solicitudes','SolicitudesController');
	
	route::resource('principal','PrincipalController');
	route::resource('vehiculos','VehiculosController');

	route::get('stock',[
		'uses' =>'VehiculosController@stock',
		'as'   =>	'vehiculos.stock'
	]);

	route::get('{id}/{id2}/{id4}/modelos',[
		'uses' => 'VehiculosController@modelos', 
		'as'   => 'vehiculos.modelos'
	]);

	route::get('{id}/{id2}/{id3}/{id4}/master',[
		'uses' => 'VehiculosController@master', 
		'as'   => 'vehiculos.master'
	]);

	route::get('{id}/{id1}/{id2}/{id3}/{id4}/det_vehiculos',[
		'uses' => 'VehiculosController@det_vehiculos', 
		'as'   => 'vehiculos.det_vehiculos'
	]);

	route::resource('stocks','AsignacionStocksController');


	route::get('envios/{id}/detalle',[
		'uses' =>'EnviosController@detalle',
		'as'   =>	'envios.detalle'
	]);

	route::get('envios/{id}/{id2}/detalle_all',[
		'uses' =>'EnviosController@detalle_all',
		'as'   =>	'envios.detalle_all'
	]);

	route::get('envios/{id}/enviar',[
		'uses' =>'EnviosController@enviar',
		'as'   =>	'envios.enviar'
	]);

	route::get('envios/{id}/envio_parcial',[
		'uses' =>'EnviosController@envio_parcial',
		'as'   =>	'envios.envio_parcial'
	]);

	
	// route::get('envios/{id}/{id2}/modal_parcial',[
	// 	'uses' =>'EnviosController@modal_parcial',
	// 	'as'   =>	'envios.modal_parcial'
	// ]);

	route::get('envios/modal_parcial',[
		'uses' =>'EnviosController@modal_parcial',
		'as'   =>	'envios.modal_parcial'
	]);

	route::get('envios/enviar_parcial',[
		'uses' =>'EnviosController@enviar_parcial',
		'as'   =>	'envios.enviar_parcial'
	]);

	route::get('envios/guardar_parcial',[
		'uses' =>'EnviosController@guardar_parcial',
		'as'   =>	'envios.guardar_parcial'
	]);
	route::get('envios/{id}/envios_lista',[
		'uses' =>'EnviosController@envios_lista',
		'as'   =>	'envios.envios_lista'
	]);
	route::get('envios/{id}/detalle_envio',[
		'uses' =>'EnviosController@detalle_envio',
		'as'   =>	'envios.detalle_envio'
	]);
	

	//============= PDF ==========================

	route::get('envios/{id}/getPDF',[
		'uses' =>'PDFController@getPDF',
		'as'   =>	'envios.getPDF'
	]);

	//============================================
	route::resource('envios','EnviosController');

});

Route::group(['prefix'=>'ventas','middleware'=>'auth'],function(){
	

	route::get('ventas/{mes}/{marca}/{modelo}/{vista}/detalle_mes_marca_modelo',[
		'uses' =>'VentasController@detalle_mes_marca_modelo',
		'as'   =>	'ventas.detalle_mes_marca_modelo'
	]);


	route::get('ventas/{mes}/{reg}/{marca}/{vista}/{origen}/detalle_mes_regional_marca',[
		'uses' =>'VentasController@detalle_mes_regional_marca',
		'as'   =>	'ventas.detalle_mes_regional_marca'
	]);

	route::get('ventas/{mes}/{suc}/{reg}/{vista}/detalle_mes_regional_sucursal',[
		'uses' =>'VentasController@detalle_mes_regional_sucursal',
		'as'   =>	'ventas.detalle_mes_regional_sucursal'
	]);


	route::get('ventas/{marca}/{mes}/mes_marca',[
		'uses' =>'VentasController@mes_marca',
		'as'   =>	'ventas.mes_marca'
	]);

	route::get('ventas/{reg}/{mes}/mes_regional',[
		'uses' =>'VentasController@mes_regional',
		'as'   =>	'ventas.mes_regional'
	]);

	route::get('ventas/{f_ini}/{f_fin}/{title}/{vista}/{origen}/detalle_fecha',[
		'uses' =>'VentasController@detalle_fecha',
		'as'   =>	'ventas.detalle_fecha'
	]);
	

	
	route::get('ventas/{marca}/por_marca',[
		'uses' =>'VentasController@por_marca',
		'as'   =>	'ventas.por_marca'
	]);

	route::get('ventas/{mes}/por_mes',[
		'uses' =>'VentasController@por_mes',
		'as'   =>	'ventas.por_mes'
	]);

	route::get('ventas/{reg}/por_regional',[
		'uses' =>'VentasController@por_regional',
		'as'   =>	'ventas.por_regional'
	]);

	route::resource('ventas','VentasController');

});