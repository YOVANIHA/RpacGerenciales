<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoReporte;

class TacticosController extends Controller
{
    public function index()
    {
        $rt01=TipoReporte::where('codigo_tipo_reporte','RT01')->first();
        $rt02=TipoReporte::where('codigo_tipo_reporte','RT02')->first();
        $rt03=TipoReporte::where('codigo_tipo_reporte','RT03')->first();
        $rt04=TipoReporte::where('codigo_tipo_reporte','RT04')->first();
        $rt05=TipoReporte::where('codigo_tipo_reporte','RT05')->first();
        
        return view('tacticos',[
            "rt01"=>$rt01,
            "rt02"=>$rt02,
            "rt03"=>$rt03,
            "rt04"=>$rt04,
            "rt05"=>$rt05]);
    }
}
