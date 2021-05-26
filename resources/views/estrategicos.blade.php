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
                                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('home')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Reportes estratégicos</li>
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
                                        <a href="{{route('parametrosRE01')}}" class="btn btn-block btn-light">
                                            <i class="fas fa-file-alt" style="font-size: 150px;color: black;"></i>
                                        </a>
                                        <h5>{{$re01->codigo_tipo_reporte}} - {{$re01->descripcion}}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <a href="#" class="btn btn-block btn-light">
                                            <i class="fas fa-file-alt" style="font-size: 150px;color: black;"></i>
                                        </a>
                                        <h5>{{$re02->codigo_tipo_reporte}} - {{$re02->descripcion}}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <a href="#" class="btn btn-block btn-light">
                                            <i class="fas fa-file-alt" style="font-size: 150px;color: black;"></i>
                                        </a>
                                        <h5>{{$re03->codigo_tipo_reporte}} - {{$re03->descripcion}}</h5>
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