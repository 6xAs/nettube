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

// Rotas do Site
Route::get('/', function () {
    return view('home');
});



Route::get('adm-painel', function () {
    return view('auth.login');
});

// Rotas do Painel
Auth::routes();

Route::get('home-painel', 'PainelController@index')->name('painel.home');

// Inserir Filme no BD
Route::get('input-filme', 'FilmeController@insert');
// Pag. Inserir Filme
Route::get('inserir-filme', function () {
    return view('painel.inserir-filme');
});

// Pag. Listar filmes
Route::get('listar-filmes', function () {
    return view('painel.listar-filmes');
});
