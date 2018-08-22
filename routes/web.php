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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'FrontendController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('carousels', 'CarouselController');
Route::resource('menus', 'MenuController');
Route::resource('tplatos', 'TplatoController');
Route::resource('promos', 'PromoController');
Route::resource('users', 'UserController');
Route::resource('buffets', 'BuffetController');
Route::resource('contactos', 'ContactoController');
Route::resource('reservacions', 'ReservacionController');
