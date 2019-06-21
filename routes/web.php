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
Route::get('/eventos/eventos/{id}','EventoController@show');
Route::get('/noticias/noticias/{id}','NoticiaController@show');
Route::get('/auth/registrar','RegistrarController@index')->name('registrar');
Route::get('/auth/registrar/ajaxRegistrar/{escolaridad}','RegistrarController@show');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

//Back-end vista que ve el administrador
Route::get('/gestor/gestor','GestorController@index')->name('gestor');
Route::post('/gestor/gestor/ajaxCarrusel/{id}','CarruselController@edit');
    //Dependencia
Route::post('/gestor/gestor/ajaxDependencia','DependenciaController@store');
Route::post('/gestor/gestor/ajaxDependencias/{id}','DependenciaController@edit');
Route::post('/gestor/gestor/ajaxDependencia/{id}','DependenciaController@borrar');
    //Juventud
Route::post('/gestor/gestor/ajaxJuventud','JuventudController@store');
Route::post('/gestor/gestor/ajaxJuventudes/{id}','JuventudController@edit');
Route::post('/gestor/gestor/ajaxJuventud/{id}','JuventudController@borrar');
    //Programas
Route::post('/gestor/gestor/ajaxProgramas','Programascontroller@store');
Route::post('/gestor/gestor/ajaxProgramas/{id}','Programascontroller@edit');
Route::post('/gestor/gestor/ajaxPrograma/{id}','Programascontroller@borrar');
    //Noticias
Route::post('/gestor/gestor/ajaxNoticia/{id}','NoticiaController@edit');
    //Eventos
Route::post('/gestor/gestor/ajaxEvento/{id}','EventoController@edit');
    //Carrusel
Route::post('/gestor/gestor/imagenesAjax','CarruselController@actualizar');
