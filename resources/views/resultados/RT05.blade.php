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
                        <h2 class="pageheader-title">R-Pac El Salvador</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="breadcrumb-link"
                                            href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a class="breadcrumb-link"
                                            href="{{route('tacticos')}}">Reportes T&aacute;cticos </a></li>
                                    <li class="breadcrumb-item"><a class="breadcrumb-link"
                                            href="{{route('parametrosRT05')}}">Reporte
                                            {{$tipoReporte->codigo_tipo_reporte}}</a></li>
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
                        <h5 class="card-header">{{$tipoReporte->codigo_tipo_reporte}}: {{$tipoReporte->descripcion}}
                        </h5>
                        <h5 class="card-header">Fecha inicial: {{fechaConFormato($fechaInicial)}} <br> Fecha final:
                            {{fechaConFormato($fechaFinal)}}
                        </h5>
                        <div class="card-body">
                            @if(sizeof($resultados)>0)
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead style="background-color:black;text-align:center;">
                                        <tr>
                                            <th style="color:white;">Proveedor</th>
                                            <th style="color:white;">Cantidad de orden de compra</th>
                                            <th style="color:white;">Monto total ($)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($resultados as $res)
                                        <tr>
                                            <td>{{$res->nombre_proveedor}}</td>
                                            <td>{{$res->cantidad}}</td>
                                            <td>{{$res->total}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div style="text-align:center;">
                                <p><a href="{{ route('descargarRT05',[$fechaInicial, $fechaFinal,$tipoReporte->tipo_reporte_id]) }}"
                                        class="btn btn-info"><i class="fa fa-download" aria-hidden="true"
                                            style="font-size:30px"></i></a></p>
                                <p>Descargar reporte en pdf</p>
                            </div>
                            @else
                            <h3 style="color:red;text-align:center;">No se encontraron resultados para este periodo</h3>
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