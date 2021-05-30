<?php

namespace App\Http\Controllers\estrategicos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoReporte;
use App\RegistroBitacora;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class RE01Controller extends Controller
{

    /*funcion para llamar a la vista de captura de parametros del reporte RE01*/
    public function capturarParametros(Request $request)
    {
        $tipoReporte=TipoReporte::where('codigo_tipo_reporte','RE01')->first();
        return view('formularios.RE01',[
            "tipoReporte"=>$tipoReporte]);
    }

    /*funcion para llamar a la vista de resultados del reporte RE01*/
    public function generarResultados(Request $request)
    {
        $tipoReporte=TipoReporte::where('codigo_tipo_reporte','RE01')->first();;
        $fechaInicial=$request->fechaInicial;
        $fechaFinal=$request->fechaFinal;

        if($fechaFinal<=$fechaInicial)
            return back()->with('delete','Usted eligió: 
                <br>Fecha inicial: '.fechaConFormato($fechaInicial).
                '<br>Fecha final: '.fechaConFormato($fechaFinal).
                '<br>La fecha final debe ser más reciente que la fecha inicial');
        else{
            $resultados=DB::select(
            "SELECT codigo_aduana,nombre_aduana,avg(fecha_estimada_llegada-fecha_ingreso_pedido) tiempoPromedioLlegadas 
             from Declaracion join aduana using(aduana_id) 
             join Proceso_importacion using (proceso_importacion_id) 
             where fecha_ingreso_pedido>? and fecha_ingreso_pedido<? 
             group by codigo_aduana,nombre_aduana",[$fechaInicial,$fechaFinal]);

            /*agregando a la bitacora la generacion del reporte*/
            $registroBitacora = new RegistroBitacora();
            $registroBitacora->usuario_id = Auth::user()->id;
            $registroBitacora->tipo_reporte_id = $tipoReporte->tipo_reporte_id;
            $registroBitacora->fecha=fechaDeAhora();
            $registroBitacora->save();

            return view('resultados.RE01',[
                "tipoReporte"=>$tipoReporte,
                "resultados"=>$resultados,
                "fechaInicial"=>$fechaInicial,
                "fechaFinal"=>$fechaFinal]);
        }
    }

    /*funcion para descargar el reporte RE01 como pdf*/
    public function descargarReporte($fechaInicial,$fechaFinal,$idTipoReporte)
    {
        $tipoReporte=TipoReporte::find($idTipoReporte);
        $resultados=DB::select(
            "SELECT codigo_aduana,nombre_aduana,avg(fecha_estimada_llegada-fecha_ingreso_pedido) tiempoPromedioLlegadas 
             from Declaracion join aduana using(aduana_id) 
             join Proceso_importacion using (proceso_importacion_id) 
             where fecha_ingreso_pedido>? and fecha_ingreso_pedido<? 
             group by codigo_aduana,nombre_aduana",[$fechaInicial,$fechaFinal]);

        $pdf = PDF::loadView('descargas.RE01',[
            "fechaInicial"=>$fechaInicial,
            "fechaFinal"=>$fechaFinal,
            "resultados"=>$resultados,
            "tipoReporte"=>$tipoReporte]);
        return $pdf->download($tipoReporte->descripcion.'-'.$fechaInicial.'-'.$fechaFinal.'.pdf');
    }
}
