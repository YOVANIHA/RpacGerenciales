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
                                            <li class="breadcrumb-item"><a class="breadcrumb-link"
                                                    href="{{route('home')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Reportes tácticos
                                            </li>
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
                    <!-- opciones -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="row justify-content-between text-center">

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <a href="{{route('parametrosRT01')}}" class="btn btn-block btn-light">
                                            <i class="fas fa-file-alt" style="font-size: 150px;color: black;"></i>
                                        </a>
                                        <h5>{{$rt01->codigo_tipo_reporte}} - {{$rt01->descripcion}}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <a href="{{route('parametrosRT02')}}" class="btn btn-block btn-light">
                                            <i class="fas fa-file-alt" style="font-size: 150px;color: black;"></i>
                                        </a>
                                        <h5>{{$rt02->codigo_tipo_reporte}} - {{$rt02->descripcion}}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <a href="{{route('parametrosRT03')}}" class="btn btn-block btn-light">
                                            <i class="fas fa-file-alt" style="font-size: 150px;color: black;"></i>
                                        </a>
                                        <h5>{{$rt03->codigo_tipo_reporte}} - {{$rt03->descripcion}}</h5>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <a href="{{route('parametrosRT04')}}"class="btn btn-block btn-light">
                                            <i class="fas fa-file-alt" style="font-size: 150px;color: black;"></i>
                                        </a>
                                        <h5>{{$rt04->codigo_tipo_reporte}} - {{$rt04->descripcion}}</h5>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <a href="{{route('parametrosRT05')}}" class="btn btn-block btn-light">
                                            <i class="fas fa-file-alt" style="font-size: 150px;color: black;"></i>
                                        </a>
                                        <h5>{{$rt05->codigo_tipo_reporte}} - {{$rt05->descripcion}}</h5>
                                    </div>
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