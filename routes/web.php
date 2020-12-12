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
*//*
Route::get('/', function () {
    return view('welcome');
}); */

/*
Route::get('/solicitud', function () {

})->name('pdf-solicitud');*/




//generando PDF
Route::post('/solicitud','CandidatoController@index')->name('pdf-solicitud');
Route::get('/solicitud','CandidatoController@login')->name('pdf-solicitud');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');//accede al login laravel
Route::get('/Alta/usuario', 'UsuariosController@index')->name('usuarios-add');
//Route::get('/empresas', 'EmpresasController@index');

Route::get('/login','UsuariosController@login')->name('login-access');
//Route::get('/oferta-registro','Experiencia_LaboralController@index')->name('registro-oferta');
//vista principal al sitio web
Route::get('/bolsa/de/trabajo','EmpresasController@index')->name('welcome-home');
Route::get('/bolsa/de/trabajo-sistemas','EmpresasController@indexSistemas')->name('welcome-sistemas');
Route::get('/bolsa/de/trabajo-contaduria','EmpresasController@indexContaduria')->name('welcome-contaduria');
//index panel usuario
Route::get('/panel/Principal','UsuariosController@indexAdmin')->name('home');
//edit/update vacante,users no ay nada dentro
Route::post('/panel/Principal','UsuariosController@panelAdmin')->name('home');
Route::get('/registro/empresas', 'EmpresasController@CreateEmpresas')->name('EmpresasRegistro');//agregar vacante
//select-by-editar vacante
Route::post('/ofertas-vacantes', 'Descripcion_OfertaController@selectOfertas')->name('SelectEdit');
Route::post('/registro-empresas', 'Descripcion_OfertaController@EditOfertas')->name('OfertasEdit');//editar vacante
Route::post('/edit/empresas', 'EmpresasController@UpdateEmpresas')->name('empresa-edit');//update vacante
Route::post('/registro/de-empresas', 'Descripcion_OfertaController@RemoverOferta')->name('OfertasRemov');//remover vacante


Route::group(['authentication' => 'login'], function () {
	Route::get('/authentication','LoginController@index')->name('usuarios-index');
	Route::post('/authentication', 'LoginController@store');
   //Route::match(["get","post"],"/authentication", "LoginController@index");
   //Route::resource('/authentication','LoginController');
});

//rutas para el registro de empresas 
Route::post('/Oferta-add','EmpresasController@store')->name('empresa-add');
Route::post('/Oferta-search','EmpresasController@search')->name('empresa-search');
Route::post('/Usuario-add','UsuariosController@store')->name('registro-usuario');
Route::post('/panel','CandidatoController@principal')->name('panel-principal');
Route::post('/panel/delete','CandidatoController@deleteUsusario()');