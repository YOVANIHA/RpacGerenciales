<?php

namespace App\Http\Controllers\estrategicos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoReporte;
use App\RegistroBitacora;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;


class RE02Controller extends Controller
{
    
    public function capturarParametros(Request $request)
    {
        $tipoReporte=TipoReporte::where('codigo_tipo_reporte','RE02')->first();
        return view('formularios.RE02',["tipoReporte"=>$tipoReporte]);
    }

    public function obtenerResultados(Request $request){

        $tipoReporte=TipoReporte::where('codigo_tipo_reporte','RE02')->first();;
        $fechaInicial=$request->fechaInicial;    
        $fechaFinal=$request->fechaFinal;
        $resultados=DB::select(
            "SELECT nombre_materia_prima, nombre_tipo_materia_prima,sum(total_materia_prima) as MontoTotalCompra
             from factura_materia_prima join factura using(factura_id)
             join materia_prima using(materia_prima_id) 
             join tipo_materia_prima using(tipo_materia_prima_id) 
             where fecha_emision_factura>=? and fecha_emision_factura<=?
             group by nombre_materia_prima,nombre_tipo_materia_prima",[$fechaInicial,$fechaFinal]);



        $registroBitacora = new RegistroBitacora();
        $registroBitacora->usuario_id = Auth::user()->id;
        $registroBitacora->tipo_reporte_id = $tipoReporte->tipo_reporte_id;
        $registroBitacora->fecha=fechaDeAhora();
        $registroBitacora->save();

        return view('resultados.RE02',[
            "tipoReporte"=>$tipoReporte,
            "resultados"=>$resultados,
            "fechaInicial"=>$fechaInicial,
            "fechaFinal"=>$fechaFinal]);

    }

    public function descargarReporte($fechaInicial,$fechaFinal,$idTipoReporte)
    {
        $tipoReporte=TipoReporte::find($idTipoReporte);
        $resultados=DB::select(
            "SELECT nombre_materia_prima, nombre_tipo_materia_prima,sum(total_materia_prima) as MontoTotalCompra
             from factura_materia_prima join factura using(factura_id)
             join materia_prima using(materia_prima_id) 
             join tipo_materia_prima using(tipo_materia_prima_id) 
             where fecha_emision_factura>=? and fecha_emision_factura<=?
             group by nombre_materia_prima,nombre_tipo_materia_prima",[$fechaInicial,$fechaFinal]);

        $pdf = PDF::loadView('descargas.RE02',[
            "fechaInicial"=>$fechaInicial,
            "fechaFinal"=>$fechaFinal,
            "resultados"=>$resultados,
            "tipoReporte"=>$tipoReporte]);
        return $pdf->download($tipoReporte->descripcion.'-'.$fechaInicial.'-'.$fechaFinal.'.pdf');
    }
}