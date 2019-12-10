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
    $nome = 'Dani';
    return view('site/welcome', compact('nome'));
});

Route::middleware('auth')->namespace('Admin')->prefix('admin')->group(function(){
	Route::resource('doadores', 'AdminDoadorController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cadastro', 'HomeController@cadastro');
Route::post('salvarCadastro', 'HomeController@salvarcadastro');


