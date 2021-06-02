<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroBitacora;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class BitacoraController extends Controller
{
    public function index()
    {
        $resultados=DB::select(
            "SELECT * from Registro_bitacora as rb 
            join users as user on user.id=rb.usuario_id
            join Tipo_reporte using(tipo_reporte_id)
            order by fecha DESC");
        return view('bitacora.index',[
            "resultados"=>$resultados]);
    } 

    /*funcion para descargar el reporte de bitacora en formato pdf*/
    public function descargarReporte()
    {
        $resultados=DB::select(
            "SELECT * from Registro_bitacora as rb 
            join users as user on user.id=rb.usuario_id
            join Tipo_reporte using(tipo_reporte_id) 
            order by fecha DESC");

        $pdf = PDF::loadView('bitacora.descarga',[
            "resultados"=>$resultados]);
        return $pdf->download('Reporte-bitacora.pdf');
    }
}
