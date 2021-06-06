@extends('layouts.app')
        @section('content')

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">R-Pac Sistema Gerencial</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('home')}}">Home</a></li>
                                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('estrategicos')}}">Reportes estratégicos</a></li>
                                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('parametrosRE03')}}">Reporte {{$tipoReporte->codigo_tipo_reporte}}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Resultados</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->                              
                    
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">{{$tipoReporte->codigo_tipo_reporte}}: {{$tipoReporte->descripcion}}</h5>
                                <h5 class="card-header">PERIODO 1</h5>
                                <h5 class="card-header">Fecha inicial: {{fechaConFormato($fechaInicial)}} <br> Fecha final: {{fechaConFormato($fechaFinal)}}</h5>
                                <h5 class="card-header">PERIODO 2</h5>
                                <h5 class="card-header">Fecha inicial: {{fechaConFormato($fechaInicial2)}} <br> Fecha final: {{fechaConFormato($fechaFinal2)}}</h5>
                                <div class="card-body">
                                    @if(sizeof($resultados)>0 && sizeof($resultados)>0)
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead style="background-color:black;text-align:center;">
                                                <tr>
                                                    <th style="color:white;">Código aduana</th>
                                                    <th style="color:white;">Nombre aduana</th>
                                                    <th style="color:white;">Monto para periodo 1</th>
                                                    <th style="color:white;">Monto para periodo 2</th>
                                                    <th style="color:white;">Variación Absoluta</th>
                                                    <th style="color:white;">Variación Relativa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($resultados as $res)
                                                
                                                <tr>
                                                    <td>{{$res->codigo_aduana}}</td>
                                                    <td>{{$res->nombre_aduana}}</td>
                                                    <td>${{$res->suma1}}</td>
                                                    @foreach($resultados2 as $res2)
                                                    @if($res->codigo_aduana==$res2->codigo_aduana)
                                                    <td>${{$res2->suma2}}</td>
                                                    <td>${{$res->suma1-$res2->suma2}}</td>
                                                    <td>{{round((($res->suma1-$res2->suma2)/$res2->suma2),2)*100}}%</td>
                                                    @endif
                                                    @endforeach
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="text-align:center;">
                                      <p><a href="{{ route('descargarRE03',[$fechaInicial, $fechaFinal, $fechaInicial2, $fechaFinal2,$tipoReporte->tipo_reporte_id]) }}" class="btn btn-info"><i class="fa fa-download" aria-hidden="true" style="font-size:30px"></i></a></p>
                                      <p>Descargar el cuadro comparativo en pdf</p>
                                    </div>
                                    @else
                                    <h3 style="color:red;text-align:center;">No se encontraron resultados para uno de los periodos</h3>
                                    @endif    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
        @endsection