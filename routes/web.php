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
})->name('admin.index');

Route::get('/produtoras', 'ProdutoraController@index')->name('produtoras.index');
Route::get('/produtoras/create', 'ProdutoraController@create')->name('produtoras.create');
Route::post('/produtoras/store', 'ProdutoraController@store')->name('produtoras.store');
Route::get('/produtoras/show/{id}', 'ProdutoraController@show')->name('produtoras.show');
Route::get('/produtoras/edit/{id}', 'ProdutoraController@edit')->name('produtoras.edit');
Route::put('/produtoras/update', 'ProdutoraController@update')->name('produtoras.update');
