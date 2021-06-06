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
                                            <li class="breadcrumb-item active"><a>Home</a></li>
                                            <li class="breadcrumb-item" aria-current="page"></li>
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
                    
                    <div class="row">
                        @if(Auth::user()->obtenerRol()->nombre_rol=="Administrador")
                        <div class="col-sm-12">
                            <a href="{{route('procesoETL')}}" class="btn btn-primary float-right btn-rounded"><i class="fa fa-play"></i> Ejecutar ETL</a>
                        </div>
                        @endif
                    </div>

                    <!-- ============================================================== -->
                    <!-- opciones -->
                    <!-- ============================================================== -->
                    <div class="container p-lg-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-12">
                                <div class="row justify-content-between text-center">

                                    @if(Auth::user()->obtenerRol()->nombre_rol=="Táctico" || Auth::user()->obtenerRol()->nombre_rol=="Estratégico")                
                                    <div class="col-16 col-md-4 col-xl-3">
                                        <div class="row">
                                            <div class="col-16">
                                                <a href="{{route('tacticos')}}" class="btn btn-block btn-light">
                                                    <i class="fas fa-file-alt" style="font-size: 150px;color: black;"></i>
                                                </a>
                                                <h3>Creación de reportes tácticos</h3>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if(Auth::user()->obtenerRol()->nombre_rol=="Estratégico")
                                    <div class="col-16 col-md-4 col-xl-3">
                                        <div class="row">
                                            <div class="col-16">
                                                <a href="{{route('estrategicos')}}" class="btn btn-block btn-light">
                                                    <i class="fas fa-file-alt" style="font-size: 150px;color: black;"></i>
                                                </a>
                                                <h3>Creación de reportes estratégicos</h3>
                                            </div>
                                        </div>
                                    @endif

                                    @if(Auth::user()->obtenerRol()->nombre_rol=="Administrador")
                                    <div class="col-16 col-md-4 col-xl-3">
                                        <div class="row">
                                            <div class="col-16">
                                                <a href="{{route('users-index')}}" class="btn btn-block btn-light">
                                                    <i class="fas fa-users" style="font-size: 150px;color: black;"></i>
                                                </a>
                                                <h3>Gestión de usuarios</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-16 col-md-4 col-xl-3">
                                        <div class="row">
                                            <div class="col-16">
                                                <a href="{{ route('bitacora') }}" class="btn btn-block btn-light">
                                                    <i class="fas fa-list" style="font-size: 150px;color: black;"></i>
                                                </a>
                                                <h3>Bitácora</h3>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
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