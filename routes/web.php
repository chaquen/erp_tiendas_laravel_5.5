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
Route::get('/fecha', function () {

    //Jenssegers\Date\Date::setLocale('es');
    echo ">>Carbon"."<br>";;
    $fecha=new Carbon\Carbon();
    echo $fecha."<br>";
    echo $fecha->format('l jS \\of F Y h:i:s A')."<br>";;
    echo ">>Jenssegers\Date\Date en español"."<br>";;
    $fecha2=new Jenssegers\Date\Date;
    echo $fecha2."<br>";
    echo $fecha2->format('l jS \\of F Y h:i:s A')."<br>";
    echo $fecha2->format('l d F Y')."<br>";


  //echo Date::now()->format('l j F Y H:i:s');
    //echo $fecha2->format('l jS \\of F Y h:i:s A');
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
