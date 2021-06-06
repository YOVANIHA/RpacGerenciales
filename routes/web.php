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
/*Reporte estrategico RE02*/
Route::get('/home/estrategicos/RE02', 'estrategicos\RE02Controller@capturarParametros')->name('parametrosRE02');
Route::post('/home/estrategicos/RE02/resultados', 'estrategicos\RE02Controller@obtenerResultados')->name('resultadosRE02');
Route::get('/home/estrategicos/RE02/resultados', 'estrategicos\RE02Controller@obtenerResultados');
Route::get('/home/estrategicos/RE02/descarga/{fechaInicial}/{fechaFinal}/{idTipoReporte}', 'estrategicos\RE02Controller@descargarReporte')->name('descargarRE02');
/*Reporte estrategico RE03*/
Route::get('/home/estrategicos/RE03', 'RE03Controller@capturarParametros')->name('parametrosRE03');
Route::post('/home/estrategicos/RE03/resultados', 'RE03Controller@generarResultados')->name('resultadosRE03');
Route::get('/home/estrategicos/RE03/resultados', 'RE03Controller@generarResultados');
Route::get('/home/estrategicos/RE03/descarga/{fechaInicial}/{fechaFinal}/{fechaInicial2}/{fechaFinal2}/{idTipoReporte}', 'RE03Controller@descargarReporte')->name('descargarRE03');

/*REPORTES TÁCTICOS*/
/*REPORTE TACTICO RT01*/
Route::get('/home/tacticos/RT01', 'RT01Controller@capturarParametros')->name('parametrosRT01');
Route::post('/home/tacticos/RT01/resultados', 'RT01Controller@generarResultados')->name('resultadosRT01');
Route::get('/home/tacticos/RT01/resultados', 'RT01Controller@generarResultados');
Route::get('/home/tacticos/RT01/descarga/{fechaInicial}/{fechaFinal}/{idTipoReporte}', 'RT01Controller@descargarReporte')->name('descargarRT01');
/*REPORTE TACTICO RT03*/
Route::get('/home/tacticos/RT03', 'RT03Controller@capturarParametros')->name('parametrosRT03');
Route::post('/home/tacticos/RT03/resultados', 'RT03Controller@generarResultados')->name('resultadosRT03');
Route::get('/home/tacticos/RT03/resultados', 'RT03Controller@generarResultados');
Route::get('/home/tacticos/RT03/descarga/{fechaInicial}/{fechaFinal}/{idTipoReporte}', 'RT03Controller@descargarReporte')->name('descargarRT03');
/*REPORTE TACTICO RT04*/
Route::get('/home/tacticos/RT04', 'RT04Controller@capturarParametros')->name('parametrosRT04');
Route::post('/home/tacticos/RT04/resultados', 'RT04Controller@generarResultados')->name('resultadosRT04');
Route::get('/home/tacticos/RT04/resultados', 'RT04Controller@generarResultados');
Route::get('/home/tacticos/RT04/descarga/{existencias}/{idTipoReporte}', 'RT04Controller@descargarReporte')->name('descargarRT04');

/*REPORTE TACTICO RT05*/
Route::get('/home/tacticos/RT05', 'RT05Controller@capturarParametros')->name('parametrosRT05');
Route::post('/home/tacticos/RT05/resultados', 'RT05Controller@generarResultados')->name('resultadosRT05');
Route::get('/home/tacticos/RT05/resultados', 'RT05Controller@generarResultados');
Route::get('/home/tacticos/RT05/descarga/{fechaInicial}/{fechaFinal}/{idTipoReporte}', 'RT05Controller@descargarReporte')->name('descargarRT05');

/*BITACORA*/
Route::get('/home/bitacora', 'BitacoraController@index')->name('bitacora');
Route::get('/home/bitacora/descarga', 'BitacoraController@descargarReporte')->name('descargaBitacora');

/* USUARIOS */
Route::get('/home/users-index', 'UsuariosController@index')->name('users-index');
Route::get('/home/users-create', 'UsuariosController@create')->name('usuarios.create');
Route::post('/usuarios', 'UsuariosController@store')->name('usuarios.store');
Route::get('/users/{usuario}/edit', 'UsuariosController@edit')->name('usuarios.edit');
Route::put('/users/{usuario}', 'UsuariosController@update')->name('usuarios.update');
Route::delete('/usuarios/{usuario}', 'UsuariosController@destroy')->name('usuarios.destroy');
Route::get('/home/users-show/{usuario}', 'UsuariosController@show')->name('usuarios.show');

/* PROCESO ETL */
Route::get('/procesoETL', 'ProcesoETLController@ejecutarProcesoETL')->name('procesoETL');