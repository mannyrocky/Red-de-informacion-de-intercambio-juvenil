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
Route::get('/gestor/gestor','GestorController@index')->name('Gestor');
Route::get('/gestor/editarcarrusel','CarruseleditController@index')->name('Carrusel');
Route::get('/gestor/editarfooter','FooteditController@index')->name('Footer');
Route::get('/gestor/editarnoticia','NotieditController@index')->name('Notiedit');
Route::get('/gestor/editartexto','TexteditController@index')->name('Textedit');
Route::get('/gestor/infopagina','InfoeditController@index')->name('Infoedit');
Route::get('/gestor/depedit','DepeditController@index')->name('Depedit');