<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Marquine\Etl\Etl;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        /*ETL para tabla Aduana*/
        /*$etlAduana = new Etl;
        $etlAduana->extract('table', 'aduana',[
                'connection'=>'transaccional',
                'columns'=>['aduana_id','codigo_aduana','nombre_aduana']
                ]
            )
        ->transform('trim', ['columns' => ['aduana_id', 'codigo_aduana','nombre_aduana']])
        ->load('insert_update', 'aduana',[
                'connection'=>'mysql',
                'key'=>['aduana_id'],
                'columns'=>['aduana_id'=>'aduana_id','codigo_aduana'=>'codigo_aduana','nombre_aduana'=>'nombre_aduana']
                ]
            )
        ->run();*/
        /*fin ETL de tabla aduana*/

        return view('home');
    }
}
