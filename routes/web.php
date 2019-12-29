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


//Sección HOME
Route::get('/', 'SeccionHomeController@index')->name('home');
Route::get('/search', 'SeccionHomeController@buscador');


//Sección EMPRESA
Route::get('/empresa', 'SeccionEmpresaController@index');


//Sección REFERENTES
Route::get('/referentes', 'SeccionReferenteController@index');


//Sección PRODUCTOS
Route::resource('/productos', 'SeccionProductoController');


//Sección CONTACTO
Route::resource('/contacto', 'SeccionContactoController');


//Sección OBRAS			
Route::resource('/obras', 'SeccionObraController')->only(['index', 'show']);

Auth::routes();

//Vista de Administrador
	Route::prefix('adm/')->group(function () {

	//Autenticación de Administradores 
	    // Authentication Routes...
	    Route::get('/', 'Auth\LoginController@showLoginForm');


    // Admin Home
		Route::get('home/', function(){
			return view('adm.home');
		});

	// Admin Slider
		Route::resource('sliders', 'SliderController');

	// Admin Destacados
		Route::resource('destacados', 'DestacadoController');

	// Admin Empresas
		Route::resource('empresa', 'EmpresaController');

    // Admin Obras
		Route::prefix('obras/')->group(function () {
			Route::resource('obra', 'ObraController')->except(['show']);
			Route::get('delete/{id}', 'ObraController@eliminar');

			Route::get('galeria/{obra}', 'ObraController@galeriaCreate');
			Route::post('galeria/store', 'ObraController@galeriaStore');
			Route::get('galeria/view/{obra}', 'ObraController@galeriaView');
			Route::get('galeria/delete/{id}', 'ObraController@galeriaDelete');
		});

	// Admin Familias
		Route::resource('familias', 'FamiliaController');

	// Admin Marcas
		Route::prefix('productos/marcas/')->group(function () {
			Route::resource('marca', 'MarcaController')->except(['show']);
			Route::get('delete/{id}', 'MarcaController@eliminar');
		});

	// Admin Logos
		Route::resource('logos', 'LogoController');

	// Admin Productos
		Route::prefix('productos')->group(function () {
			Route::resource('/producto', 'ProductoController');
			Route::get('delete/{id}', 'ProductoController@eliminar');


			Route::get('galeria/{producto}', 'ProductoController@galeriaCreate');
			Route::post('galeria/store', 'ProductoController@galeriaStore');
			Route::get('galeria/view/{producto}', 'ProductoController@galeriaView');
			Route::get('galeria/delete/{id}', 'ProductoController@galeriaDelete');


			Route::get('etiqueta/{producto}', 'ProductoController@etiquetaCreate');
			Route::post('etiqueta/store', 'ProductoController@etiquetaStore');
			Route::get('etiqueta/view/{producto}', 'ProductoController@etiquetaView');
			Route::get('etiqueta/delete/{id}', 'ProductoController@etiquetaDelete');
		});

    // Admin Referentes
		Route::prefix('referentes/')->group(function () {
			Route::resource('ref/', 'ReferenteController')->except(['show']);
			Route::get('delete/{id}', 'ReferenteController@eliminar');
		});

	// Admin Información
		Route::prefix('informacion')->group(function () {
			Route::get('/contacto', 'InformacionController@contacto');
			Route::get('/editContacto/{id}', 'InformacionController@editContacto');
			Route::get('/redes', 'InformacionController@redes');
			Route::get('/editRedes/{id}', 'InformacionController@editRedes');
			Route::put('update/{id}', 'InformacionController@update');
		});

	// Admin Metadato
		Route::resource('metadatos', 'MetadatoController');

    // Admin Usuarios
		Route::prefix('usuarios/')->group(function () {
			Route::resource('user/', 'UserController')->except(['show']);
			Route::get('delete/{id}', 'UserController@eliminar');
		});


	});
