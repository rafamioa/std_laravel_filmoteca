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
    return view('admin.base.base');
});

Route::get('/produtoras', 'ProdutoraController@index')->name('produtoras.index');
Route::get('/produtoras/create', 'ProdutoraController@create')->name('produtoras.create');
Route::post('/produtoras/store', 'ProdutoraController@store')->name('produtoras.store');
