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

/*REPORTES TÁCTICOS*/


/*BITACORA*/
Route::get('/home/bitacora', 'BitacoraController@index')->name('bitacora');

