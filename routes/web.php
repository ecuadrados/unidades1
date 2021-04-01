<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/usuario', 'UsuarioController');
Route::resource('/beneficiario', 'BeneficiarioController');
Route::resource('/unidadmujer', 'UnidadMujerController');
Route::resource('/unidadjuventud', 'UnidadJuventudController');
Route::resource('/unidadhabitantecalle', 'UnidadHabitanteCalleController');
Route::resource('/unidadgeneral', 'UnidadGeneralController');
Route::resource('/meta', 'MetaController');
Route::resource('/actividad', 'ActividadController');
Route::resource('/caracterizacion', 'CaracterizacionController');
Route::get('/unidadgeneral/ver/{id}', 'UnidadGeneralController@ver')->name('unidadgeneral.ver');
Route::get('/unidadgeneral/usuario/{centro?}', 'UnidadGeneralController@lista')->name('unidadgeneral.lista');
Route::post('/unidadgeneral/kit', 'KitController@store')->name('kit.store');
Route::post('/actividad/poblacion', 'ActividadController@poblacion')->name('actividad.poblacion');
Route::get('/actividad/verpoblacion/{id}', 'ActividadController@verpoblacion')->name('actividad.verpoblacion');

// Route::get('/unidadhabitantecalle/show/{id}', 'unidadhabitantecalle@show')->name('unidadhabitantecalle.show');

Route::get('/estadistica/meta', 'EstadisticaController@meta')->name('estadistica.meta');





