<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoReporte;
use App\RegistroBitacora;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class RT03Controller extends Controller
{
    public function capturarParametros(Request $request)
    {
        $tipoReporte = TipoReporte::where('codigo_tipo_reporte', 'RT03')->first();
        return view('formularios.RT03', [
            "tipoReporte" => $tipoReporte
        ]);
    }


    public function generarResultados(Request $request)
    {
        $tipoReporte = TipoReporte::where('codigo_tipo_reporte', 'RT03')->first();;
        $fechaInicial = $request->fechaInicial;
        $fechaFinal = $request->fechaFinal;
        if($fechaFinal<=$fechaInicial)
            return back()->with('delete','Usted eligió: 
                <br>Fecha inicial: '.fechaConFormato($fechaInicial).
                '<br>Fecha final: '.fechaConFormato($fechaFinal).
                '<br>La fecha final debe ser más reciente que la fecha inicial');
        else{
        $resultados = DB::select(
            "SELECT tipo_documento, fecha_emision_doc, COUNT(distinct documento_transporte_id) as cantidad
            from documento_transporte
            where fecha_emision_doc >=? and fecha_emision_doc <=?
            group by tipo_documento, fecha_emision_doc",[$fechaInicial, $fechaFinal]);

   
        $registroBitacora = new RegistroBitacora();
        $registroBitacora->usuario_id = Auth::user()->id;
        $registroBitacora->tipo_reporte_id = $tipoReporte->tipo_reporte_id;
        $registroBitacora->fecha = fechaDeAhora();
        $registroBitacora->save();

        return view('resultados.RT03', [
            "tipoReporte" => $tipoReporte,
            "resultados" => $resultados,
            "fechaInicial" => $fechaInicial,
            "fechaFinal" => $fechaFinal
        ]);
        
        }
       
    }

 
    public function descargarReporte($fechaInicial, $fechaFinal, $idTipoReporte)
    {
        $tipoReporte = TipoReporte::find($idTipoReporte);
        $resultados = DB::select(
            "SELECT tipo_documento, fecha_emision_doc, COUNT(distinct documento_transporte_id) as cantidad
            from documento_transporte
            where fecha_emision_doc >=? and fecha_emision_doc <=?
            group by tipo_documento, fecha_emision_doc",[$fechaInicial, $fechaFinal]);
       

        $pdf = PDF::loadView('descargas.RT03', [
            "fechaInicial" => $fechaInicial,
            "fechaFinal" => $fechaFinal,
            "resultados" => $resultados,
            "tipoReporte" => $tipoReporte
        ]);
        return $pdf->download($tipoReporte->descripcion . '-' . $fechaInicial . '-' . $fechaFinal . '.pdf');
    }
}