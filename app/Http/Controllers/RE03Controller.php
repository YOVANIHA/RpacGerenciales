<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoReporte;
use App\RegistroBitacora;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;


class RE03Controller extends Controller
{
    //
        /*funcion para llamar a la vista de captura de parametros del reporte RE03*/
        public function capturarParametros(Request $request)
        {
            $tipoReporte=TipoReporte::where('codigo_tipo_reporte','RE03')->first();
            return view('formularios.RE03',[
                "tipoReporte"=>$tipoReporte]);
        }

        public function generarResultados(Request $request)
        {
            $tipoReporte=TipoReporte::where('codigo_tipo_reporte','RE03')->first();;
            $fechaInicial=$request->fechaInicialPeriodo1;
            $fechaFinal=$request->fechaFinalPeriodo1;
            $fechaInicial2=$request->fechaInicialPeriodo2;
            $fechaFinal2=$request->fechaFinalPeriodo2;

    
            if($fechaFinal<=$fechaInicial)
                return back()->with('delete','Usted eligió para el periodo 1: 
                    <br>Fecha inicial: '.fechaConFormato($fechaInicial).
                    '<br>Fecha final: '.fechaConFormato($fechaFinal).
                    '<br>La fecha final debe ser más reciente que la fecha inicial');
            else{
                if($fechaFinal2<=$fechaInicial2)
                return back()->with('delete','Usted eligió para el periodo 2: 
                    <br>Fecha inicial: '.fechaConFormato($fechaInicial2).
                    '<br>Fecha final: '.fechaConFormato($fechaFinal2).
                    '<br>La fecha final debe ser más reciente que la fecha inicial');
                else{
                    $resultados=DB::select(
                    "SELECT codigo_aduana,nombre_aduana,sum(total_factura) suma1 
                    from Declaracion 
                    join Aduana using(aduana_id) 
                    join Factura using (declaracion_id)
                    join Proceso_importacion using (proceso_importacion_id) 
                    where fecha_ingreso_pedido>? and fecha_ingreso_pedido<? 
                    group by aduana_id,codigo_aduana,nombre_aduana",[$fechaInicial,$fechaFinal]);

                    $resultados2=DB::select(
                    "SELECT codigo_aduana,nombre_aduana,sum(total_factura) suma2 
                    from Declaracion 
                    join Aduana using(aduana_id) 
                    join Factura using (declaracion_id)
                    join Proceso_importacion using (proceso_importacion_id) 
                    where fecha_ingreso_pedido>? and fecha_ingreso_pedido<? 
                    group by aduana_id,codigo_aduana,nombre_aduana",[$fechaInicial2,$fechaFinal2]);
        
                    /*agregando a la bitacora la generacion del reporte*/
                    $registroBitacora = new RegistroBitacora();
                    $registroBitacora->usuario_id = Auth::user()->id;
                    $registroBitacora->tipo_reporte_id = $tipoReporte->tipo_reporte_id;
                    $registroBitacora->fecha=fechaDeAhora();
                    $registroBitacora->save();
        
                    return view('resultados.RE03',[
                        "tipoReporte"=>$tipoReporte,
                        "resultados"=>$resultados,
                        "resultados2"=>$resultados2,
                        "fechaInicial2"=>$fechaInicial2,
                        "fechaFinal2"=>$fechaFinal2,
                        "fechaInicial"=>$fechaInicial,
                        "fechaFinal"=>$fechaFinal]);
                }
            }
        }

        public function descargarReporte($fechaInicial,$fechaFinal, $fechaInicial2, $fechaFinal2,$idTipoReporte)
        {
            $tipoReporte=TipoReporte::find($idTipoReporte);
            $resultados=DB::select(
                "SELECT codigo_aduana,nombre_aduana,sum(total_factura) suma1 
                 from Declaracion 
                 join Aduana using(aduana_id) 
                 join Factura using (declaracion_id)
                 join Proceso_importacion using (proceso_importacion_id) 
                 where fecha_ingreso_pedido>? and fecha_ingreso_pedido<? 
                 group by codigo_aduana,nombre_aduana",[$fechaInicial,$fechaFinal]);

                $resultados2=DB::select(
                "SELECT codigo_aduana,nombre_aduana,sum(total_factura) suma2 
                 from Declaracion 
                 join Aduana using(aduana_id) 
                 join Factura using (declaracion_id)
                 join Proceso_importacion using (proceso_importacion_id) 
                 where fecha_ingreso_pedido>? and fecha_ingreso_pedido<? 
                 group by codigo_aduana,nombre_aduana",[$fechaInicial2,$fechaFinal2]);
    
            $pdf = PDF::loadView('descargas.RE03',[
                "tipoReporte"=>$tipoReporte,
                "resultados"=>$resultados,
                "resultados2"=>$resultados2,
                "fechaInicial2"=>$fechaInicial2,
                "fechaFinal2"=>$fechaFinal2,
                "fechaInicial"=>$fechaInicial,
                "fechaFinal"=>$fechaFinal]);
            return $pdf->download($tipoReporte->descripcion.'-'.$fechaInicial.'-'.$fechaFinal.'.pdf');
        }

}
