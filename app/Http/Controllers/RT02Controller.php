<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoReporte;
use App\RegistroBitacora;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class RT02Controller extends Controller
{
    //
    /*funcion para llamar a la vista de captura de parametros del reporte RT02*/
    public function capturarParametros(Request $request)
    {
        $tipoReporte=TipoReporte::where('codigo_tipo_reporte','RT02')->first();
        return view('formularios.RT02',[
        "tipoReporte"=>$tipoReporte]);
    }

    public function generarResultados(Request $request)
    {
        $tipoReporte = TipoReporte::where('codigo_tipo_reporte', 'RT02')->first();;
        $fechaInicial = $request->fechaInicial;
        $fechaFinal = $request->fechaFinal;
        if($fechaFinal<=$fechaInicial)
            return back()->with('delete','Usted eligió: 
                <br>Fecha inicial: '.fechaConFormato($fechaInicial).
                '<br>Fecha final: '.fechaConFormato($fechaFinal).
                '<br>La fecha final debe ser más reciente que la fecha inicial');
        else{
        $resultados1 = DB::select(
            "SELECT nombre_proveedor,sum(total_factura) as montoFacturas, 
            count(IF(condiciones_pago='Contado',1,null)) as contado,
            count(IF(condiciones_pago='Credito',1,null)) as credito
            from Proveedor 
            join Factura using (proveedor_id)
            where fecha_emision_factura>? and fecha_emision_factura<? 
            group by proveedor_id,nombre_proveedor",[$fechaInicial,$fechaFinal]);

      
           // dd($resultados1);

   
        $registroBitacora = new RegistroBitacora();
        $registroBitacora->usuario_id = Auth::user()->id;
        $registroBitacora->tipo_reporte_id = $tipoReporte->tipo_reporte_id;
        $registroBitacora->fecha = fechaDeAhora();
        $registroBitacora->save();

        return view('resultados.RT02', [
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
            "SELECT nombre_proveedor,sum(total_factura) as montoFacturas, 
            count(IF(condiciones_pago='Contado',1,null)) as contado,
            count(IF(condiciones_pago='Credito',1,null)) as credito
            from Proveedor 
            join Factura using (proveedor_id)
            where fecha_emision_factura>? and fecha_emision_factura<? 
            group by proveedor_id,nombre_proveedor",[$fechaInicial,$fechaFinal]); 
     
       

        $pdf = PDF::loadView('descargas.RT02', [
            "tipoReporte" => $tipoReporte,
            "resultados1" => $resultados1,
            "fechaInicial" => $fechaInicial,
            "fechaFinal" => $fechaFinal
        ]);
        return $pdf->download($tipoReporte->descripcion . '-' . $fechaInicial . '-' . $fechaFinal . '.pdf');
    }


}
