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
                                            <li class="breadcrumb-item active"><a class="breadcrumb-link" 
                                                href="{{route('tacticos')}}">Reportes t&aacute;cticos </a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Reporte {{$tipoReporte->codigo_tipo_reporte}}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->

                    <div class="row">
                        @include('alerts.alerts')
                    </div>

                    <!-- ============================================================== -->
                    <!-- opciones -->
                    <!-- ============================================================== -->                               
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card" style="background-color:lightgray">
                                <h5 class="card-header">{{$tipoReporte->codigo_tipo_reporte}}: {{$tipoReporte->descripcion}}</h5>
                                <div class="card-body">
                                    <p style="text-align:center;color:black;">Seleccione la fecha inicial y final para generar el reporte</p>
                                    <form id="validationform" method="post" action="{{ route('resultadosRT01') }}" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right"  style="color:black;">Fecha inicial</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input type="date" name="fechaInicial" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right"  style="color:black;">Fecha final</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input type="date" name="fechaFinal" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-primary">GENERAR REPORTE</button>
                                                    <button type="reset" class="btn btn-space btn-secondary">CANCELAR</button>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    </div>
           
                    <!-- ============================================================== -->
                    <!-- end opciones  -->
                    <!-- ============================================================== -->
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
        @endsection