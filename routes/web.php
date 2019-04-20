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
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
Route::get('/dependencias/Dependencia1','Dependencia1Controller@index')->name('dependencia1');
Route::get('/eventos/evento1','evento1Controller@index')->name('evento1');
Route::get('/noticias/noticia1','noticia1Controller@index')->name('noticia1');
Route::get('/auth/registrar','RegistrarController@index')->name('registrar');