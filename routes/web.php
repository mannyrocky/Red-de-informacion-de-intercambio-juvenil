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

//Front-End vistas por parte del usuario
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
Route::get('/dependencias/Dependencia/{id}','DependenciaController@show');
Route::get('/juventud/Juventud/{id}','JuventudController@show');
Route::get('/programas/Programas/{id}','Programascontroller@show');
Route::get('/auth/registrar','RegistrarController@index')->name('registrar');

//Back-end vista que ve el administrador
Route::get('/gestor/gestor','GestorController@index')->name('gestor');
Route::get('/gestor/editarcarrusel','CarruseleditController@index')->name('Carrusel');
//Dependencia
Route::post('/gestor/gestor/ajaxDependencia','DependenciaController@store');
Route::post('/gestor/gestor/ajaxDependencia/{id}','DependenciaController@edit');
//Juventud
Route::post('/gestor/gestor/ajaxJuventud','JuventudController@store');
Route::post('/gestor/gestor/ajaxJuventud/{id}','JuventudController@edit');
//Programas
Route::post('/gestor/gestor/ajaxProgramas','Programascontroller@store');
Route::post('/gestor/gestor/ajaxPrograma/{id}','Programascontroller@edit');