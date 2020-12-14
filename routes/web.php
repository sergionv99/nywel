<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PostController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('search', 'ProductosController@busqueda')->name('buscar');

Route::get('salir',function(){
    return redirect()->route('login');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('blog','PostController');

Route::resource('productos','ProductosController');
Route::resource('carrito','CarritoController');
Route::resource('gestion','GestionController');

Route::post('ajax/request/store', 'CarritoController@fill_cart')->name('ajax.store');
Route::post('ajax/request/remove', 'CarritoController@remove_cart')->name('ajax.remove');
Route::post('ajax/request/adjust', 'CarritoController@cantidad_cart')->name('ajax.adjust');

Route::get('ajax/request/search', 'GestionController@search_gestion')->name('ajax.search');

//Route::resources([
//    'blog' => PostController::class,
//]);
//Route::get('posts', 'PostController@index');