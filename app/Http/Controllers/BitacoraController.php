<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroBitacora;
use Illuminate\Support\Facades\DB;

class BitacoraController extends Controller
{
    public function index()
    {
        $resultados=DB::select(
            "SELECT * from Registro_bitacora as rb 
            join users as user on user.id=rb.usuario_id
            join Tipo_reporte using(tipo_reporte_id)");
        return view('bitacora.index',[
            "resultados"=>$resultados]);
    } 
}
