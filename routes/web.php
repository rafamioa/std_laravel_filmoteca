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
Route::delete('/produtoras/delete/{id}', 'ProdutoraController@destroy')->name('produtoras.delete');

Route::get('/artistas','AtorController@index')->name('atores.index');
Route::get('/artistas/create','AtorController@create')->name('atores.create');
Route::post('/artistas/store','AtorController@store')->name('atores.store');
Route::get('/artistas/show/{id}', 'AtorController@show')->name('atores.show');
Route::get('/artistas/edit/{id}', 'AtorController@edit')->name('atores.edit');
Route::put('/artistas/update', 'AtorController@update')->name('atores.update');
Route::delete('/artistas/delete/{id}', 'AtorController@delete')->name('atores.delete');

Route::get('/diretores','DiretorController@index')->name('diretores.index');
Route::get('/diretores/create','DiretorController@create')->name('diretores.create');
Route::post('/diretores/store','DiretorController@store')->name('diretores.store');
Route::get('/diretores/show/{id}', 'DiretorController@show')->name('diretores.show');
Route::get('/diretores/edit/{id}', 'DiretorController@edit')->name('diretores.edit');
Route::put('/diretores/update', 'DiretorController@update')->name('diretores.update');
Route::delete('/diretores/delete/{id}', 'DiretorController@delete')->name('diretores.delete');

Route::get('/filmes/create', 'FilmeController@create')->name('filmes.create');
Route::post('/filmes/store', 'FilmeController@store')->name('filmes.store');
