<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoReporte;


class EstrategicosController extends Controller
{
    public function index()
    {
        $re01=TipoReporte::where('codigo_tipo_reporte','RE01')->first();
        $re02=TipoReporte::where('codigo_tipo_reporte','RE02')->first();
        $re03=TipoReporte::where('codigo_tipo_reporte','RE03')->first();
        return view('estrategicos',[
            "re01"=>$re01,
            "re02"=>$re02,
            "re03"=>$re03]);
    }    
}
