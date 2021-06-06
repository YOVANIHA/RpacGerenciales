<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoReporte;
use App\RegistroBitacora;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class RT05Controller extends Controller
{
    public function capturarParametros(Request $request)
    {
        $tipoReporte = TipoReporte::where('codigo_tipo_reporte', 'RT05')->first();
        return view('formularios.RT05', [
            "tipoReporte" => $tipoReporte
        ]);
    }

    /*funcion para llamar a la vista de resultados del reporte RT05*/
    public function generarResultados(Request $request)
    {
        $tipoReporte = TipoReporte::where('codigo_tipo_reporte', 'RT05')->first();;
        $fechaInicial = $request->fechaInicial;
        $fechaFinal = $request->fechaFinal;

        if($fechaFinal<=$fechaInicial)
            return back()->with('delete','Usted eligió: 
                <br>Fecha inicial: '.fechaConFormato($fechaInicial).
                '<br>Fecha final: '.fechaConFormato($fechaFinal).
                '<br>La fecha final debe ser más reciente que la fecha inicial');
        else{
            $resultados = DB::select(
                "SELECT nombre_proveedor, count(orden_de_compra_id) cantidad, sum(total_orden) total 
                from orden_de_compra join proveedor USING (proveedor_id)
                where fecha_emision_orden > ? and fecha_emision_orden < ?
                group by proveedor_id, nombre_proveedor",
                [$fechaInicial, $fechaFinal]
            );

            /*agregando a la bitacora la generacion del reporte*/
            $registroBitacora = new RegistroBitacora();
            $registroBitacora->usuario_id = Auth::user()->id;
            $registroBitacora->tipo_reporte_id = $tipoReporte->tipo_reporte_id;
            $registroBitacora->fecha = fechaDeAhora();
            $registroBitacora->save();

            return view('resultados.RT05', [
                "tipoReporte" => $tipoReporte,
                "resultados" => $resultados,
                "fechaInicial" => $fechaInicial,
                "fechaFinal" => $fechaFinal
            ]);
        }
    }

    /*funcion para descargar el reporte RT05 como pdf*/
    public function descargarReporte($fechaInicial, $fechaFinal, $idTipoReporte)
    {
        $tipoReporte = TipoReporte::find($idTipoReporte);
        $resultados = DB::select(
            "SELECT nombre_proveedor, count(orden_de_compra_id) cantidad, sum(total_orden) total 
            from orden_de_compra join proveedor USING (proveedor_id)
            where fecha_emision_orden > ? and fecha_emision_orden < ?
            group by proveedor_id, nombre_proveedor",
            [$fechaInicial, $fechaFinal]
        );

        $pdf = PDF::loadView('descargas.RT05', [
            "fechaInicial" => $fechaInicial,
            "fechaFinal" => $fechaFinal,
            "resultados" => $resultados,
            "tipoReporte" => $tipoReporte
        ]);
        return $pdf->download($tipoReporte->descripcion . '-' . $fechaInicial . '-' . $fechaFinal . '.pdf');
    }
}