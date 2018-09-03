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

// Fim Rotas do Site



// Rotas do Painel
Auth::routes();

Route::get('home-painel', 'PainelController@index')->name('painel.home');

// Fim  Rotas do Painel





// ##################################### ROTAS DOS FILMES ###########################################
Route::post('input-filme', 'FilmeController@insert');

// Pag. Inserir Filme
Route::get('inserir-filme', function () {
    return view('painel.inserir-filme');
});

// Pag. Listar filmes
Route::get('listar-filmes', 'FilmeController@listar')->name('listar-filmes');

// Pag. Filme Details (Edit)
Route::resource('editfilme', 'FilmeController');

Route::resource('filmes', 'FilmeController');

// Deletar Filme
Route::resource('deletarfilme', 'FilmeController');
// ##################################### / FIM ROTAS DOS FILMES ###########################################




// ##################################### ROTAS DOS BANNERS ###########################################
// Pag. Inserir banner
Route::get('inserir-banner', function () {
    return view('painel.inserir-banner');
});

// Pag. Listar Banner
Route::get('listar-banner', 'bannerController@listar')->name('listar-banner');

// Inserir Banner no BD
Route::post('input-banner', 'BannerController@insert');


Route::resource('editbanner', 'BannerController');


Route::resource('banner', 'BannerController');

// Deletar banner
Route::resource('deletarbanner', 'BannerController');


// ##################################### / FIM ROTAS DOS BannerRequest ###########################################
