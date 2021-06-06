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
                                            <li class="breadcrumb-item active" aria-current="page">Bitácora</li>
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
                                <h5 class="card-header">Bitacora</h5>
                                <div class="card-body">
                                    @if(sizeof($resultados)>0)
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead style="background-color:black;text-align:center;">
                                                <tr>
                                                    <th style="color:white;">Fecha</th>
                                                    <th style="color:white;">Persona que emitió el reporte</th>
                                                    <th style="color:white;">Reporte realizado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($resultados as $res)
                                                <tr>
                                                    <td>{{fechaConFormato($res->fecha)}}</td>
                                                    <td>{{$res->nombres}} {{$res->apellidos}}</td>
                                                    <td>{{$res->descripcion}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="text-align:center;">
                                      <p><a href="{{ route('descargaBitacora')}}" class="btn btn-info"><i class="fa fa-download" aria-hidden="true" style="font-size:30px"></i></a></p>
                                      <p>Descargar bitácora en formato pdf</p>
                                    </div>
                                    @else
                                    <h3 style="color:red;text-align:center;">No se encontraron resultados en la bitácora</h3>
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