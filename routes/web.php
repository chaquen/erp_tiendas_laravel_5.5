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


Route::get('/config', function () {
    dd(config());
});
Auth::routes();

Route::group([
    // 'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function(){

	Route::get('/home', 'HomeController@index')->name('home');
	Route::post("subir_archivo","ProductoController@subir_archivo");

	Route::resource('/productos', 'ProductoController');
	Route::resource('/categorias', 'CategoriaController');
	Route::resource('/sedes', 'SedeController');
	Route::get('/', function () {
	
	    return view('home');
	    //dd(config());
	});
});