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

route::get('/barang', 'BarangController@index');
route::get('/barang/tambah', 'BarangController@tambah');
route::post('/barang/store', 'BarangController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/barang/edit/{id}', 'BarangController@edit');
route::get('/barang/delete/{id}', 'BarangController@delete');
route::post('/barang/update/', 'BarangController@update');

route::get('/item', 'ItemController@index');
route::get('/item/edit/{id}', 'ItemController@edit');
route::get('/item/delete/{id}', 'ItemController@delete');
route::get('/item/tambah', 'ItemController@tambah');
route::post('/item/store', 'ItemController@store');
route::post('/item/update/', 'ItemController@update');
route::get('/item/show/{id}', 'ItemController@show');



