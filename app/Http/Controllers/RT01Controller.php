<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoReporte;
use App\RegistroBitacora;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class RT01Controller extends Controller
{
    
    //
    /*funcion para llamar a la vista de captura de parametros del reporte RE03*/
    public function capturarParametros(Request $request)
    {
        $tipoReporte=TipoReporte::where('codigo_tipo_reporte','RT01')->first();
        return view('formularios.RT01',[
        "tipoReporte"=>$tipoReporte]);
    }

    public function generarResultados(Request $request)
    {
        $tipoReporte = TipoReporte::where('codigo_tipo_reporte', 'RT01')->first();;
        $fechaInicial = $request->fechaInicial;
        $fechaFinal = $request->fechaFinal;
        if($fechaFinal<=$fechaInicial)
            return back()->with('delete','Usted eligió: 
                <br>Fecha inicial: '.fechaConFormato($fechaInicial).
                '<br>Fecha final: '.fechaConFormato($fechaFinal).
                '<br>La fecha final debe ser más reciente que la fecha inicial');
        else{
        $resultados1 = DB::select(
            "SELECT nombre_importacion,sum(total_factura) as montoFacturas, 
            count(IF(pago_impuestos=0,1,null)) as pendiente,
            count(IF(pago_impuestos=1,1,null)) as solvente
            from Declaracion 
            join Factura using (declaracion_id)
            join Proceso_importacion using (proceso_importacion_id) 
            where fecha_ingreso_pedido>? and fecha_ingreso_pedido<? 
            group by proceso_importacion_id",[$fechaInicial,$fechaFinal]);

      
           // dd($resultados1);

   
        $registroBitacora = new RegistroBitacora();
        $registroBitacora->usuario_id = Auth::user()->id;
        $registroBitacora->tipo_reporte_id = $tipoReporte->tipo_reporte_id;
        $registroBitacora->fecha = fechaDeAhora();
        $registroBitacora->save();

        return view('resultados.RT01', [
            "tipoReporte" => $tipoReporte,
            "resultados1" => $resultados1,
            "fechaInicial" => $fechaInicial,
            "fechaFinal" => $fechaFinal
        ]);
        
        }
       
    }

    public function descargarReporte($fechaInicial, $fechaFinal, $idTipoReporte)
    {
        $tipoReporte = TipoReporte::find($idTipoReporte);
        $resultados1 = DB::select(
            "SELECT nombre_importacion,sum(total_factura) as montoFacturas, 
            count(IF(pago_impuestos=0,1,null)) as pendiente,
            count(IF(pago_impuestos=1,1,null)) as solvente
            from Declaracion 
            join Factura using (declaracion_id)
            join Proceso_importacion using (proceso_importacion_id) 
            where fecha_ingreso_pedido>? and fecha_ingreso_pedido<? 
            group by proceso_importacion_id",[$fechaInicial,$fechaFinal]);
       

        $pdf = PDF::loadView('descargas.RT01', [
            "tipoReporte" => $tipoReporte,
            "resultados1" => $resultados1,
            "fechaInicial" => $fechaInicial,
            "fechaFinal" => $fechaFinal
        ]);
        return $pdf->download($tipoReporte->descripcion . '-' . $fechaInicial . '-' . $fechaFinal . '.pdf');
    }
}
