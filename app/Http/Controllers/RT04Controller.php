<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoReporte;
use App\RegistroBitacora;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class RT04Controller extends Controller
{
    public function capturarParametros(Request $request)
    {
        $tipoReporte = TipoReporte::where('codigo_tipo_reporte', 'RT04')->first();
        return view('formularios.RT04', [
            "tipoReporte" => $tipoReporte
        ]);
    }


    public function generarResultados(Request $request)
    {
        $tipoReporte = TipoReporte::where('codigo_tipo_reporte', 'RT04')->first();;
        $existencias = $request->nivelInventario;
        $resultados = DB::select(
            "SELECT nombre_materia_prima, nombre_tipo_materia_prima, existencias from 
            materia_prima join tipo_materia_prima using(tipo_materia_prima_id) where existencias<?
            order by  existencias desc",[$existencias]);

   
        $registroBitacora = new RegistroBitacora();
        $registroBitacora->usuario_id = Auth::user()->id;
        $registroBitacora->tipo_reporte_id = $tipoReporte->tipo_reporte_id;
        $registroBitacora->fecha = fechaDeAhora();
        $registroBitacora->save();

        return view('resultados.RT04', [
            "tipoReporte" => $tipoReporte,
            "resultados" => $resultados,
            "existencias" => $existencias,
            
        ]);

       
    }

 
    public function descargarReporte($existencias,$idTipoReporte)
    {
        $tipoReporte = TipoReporte::find($idTipoReporte);
        $resultados = DB::select(
            "SELECT nombre_materia_prima, nombre_tipo_materia_prima, existencias from 
            materia_prima join tipo_materia_prima using(tipo_materia_prima_id) where existencias<?
            order by  existencias desc",[$existencias]);

       

        $pdf = PDF::loadView('descargas.RT04', [
            "tipoReporte" => $tipoReporte,
            "resultados" => $resultados,
            "existencias" => $existencias,
            
        ]);
        return $pdf->download($tipoReporte->descripcion. '.pdf');
    }
}