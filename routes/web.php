<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    //return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/tacticos', 'TacticosController@index')->name('tacticos');
Route::get('/home/estrategicos', 'EstrategicosController@index')->name('estrategicos');

/*REPORTES ESTRATEGICOS*/
/*Reporte estrategico RE01*/
Route::get('/home/estrategicos/RE01', 'estrategicos\RE01Controller@capturarParametros')->name('parametrosRE01');
Route::post('/home/estrategicos/RE01/resultados', 'estrategicos\RE01Controller@generarResultados')->name('resultadosRE01');
Route::get('/home/estrategicos/RE01/resultados', 'estrategicos\RE01Controller@generarResultados');
Route::get('/home/estrategicos/RE01/descarga/{fechaInicial}/{fechaFinal}/{idTipoReporte}', 'estrategicos\RE01Controller@descargarReporte')->name('descargarRE01');

/*REPORTES TÁCTICOS*/
/*REPORTE TACTICO RT05*/
Route::get('/home/tacticos/RT05', 'RT05Controller@capturarParametros')->name('parametrosRT05');
Route::post('/home/tacticos/RT05/resultados', 'RT05Controller@generarResultados')->name('resultadosRT05');
Route::get('/home/tacticos/RT05/resultados', 'RT05Controller@generarResultados');
Route::get('/home/tacticos/RT05/descarga/{fechaInicial}/{fechaFinal}/{idTipoReporte}', 'RT05Controller@descargarReporte')->name('descargarRT05');

/*BITACORA*/
Route::get('/home/bitacora', 'BitacoraController@index')->name('bitacora');

/* USUARIOS */
Route::get('/home/users-index', 'UsuariosController@index')->name('users-index');
Route::get('/home/users-create', 'UsuariosController@create')->name('usuarios.create');
Route::post('/usuarios', 'UsuariosController@store')->name('usuarios.store');
Route::get('/users/{usuario}/edit', 'UsuariosController@edit')->name('usuarios.edit');
Route::put('/users/{usuario}', 'UsuariosController@update')->name('usuarios.update');
Route::delete('/usuarios/{usuario}', 'UsuariosController@destroy')->name('usuarios.destroy');
Route::get('/home/users-show/{usuario}', 'UsuariosController@show')->name('usuarios.show');