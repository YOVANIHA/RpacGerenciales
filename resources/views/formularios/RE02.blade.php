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
                                            <li class="breadcrumb-item active"><a class="breadcrumb-link" href="{{route('estrategicos')}}">Reportes estratégicos</a></li>
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
                                    <p style="text-align:center;color:black;">Seleccione el mes del año para generar el cuadro resumen</p>
                                    <form id="validationform" method="post" action="{{ route('resultadosRE02') }}" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right"  style="color:black;">Mes del Año</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                            
                                                <input type="month" id="mesAnio" onchange="calcularFechasLimites();" required class="form-control">
                                                <input type="hidden" id="fechaInicial" name="fechaInicial">
                                                <input type="hidden" id="fechaFinal" name="fechaFinal" >
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">GENERAR CUADRO RESUMEN</button>
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

      @section('scripts')
      <script>
        function calcularFechasLimites(){
            
		//se separan los componentes del input de tipo month en año y mes
		anio=mesAnio.value.split("-")[0];
		mes=mesAnio.value.split("-")[1];

		//se crea la fecha de inicio del periodo
		start=new Date(anio,mes-1,1);
		
		//se añade la fecha inicial al input correspondiente
		fechaInicial.value=String(start.getFullYear()+'-'+(start.getMonth()+1)+'-'+start.getDate());
		//se crea la fecha de fin del periodo
		end=new Date(anio,mes,0);

		//se añade la fecha final al input correspondiente
		fechaFinal.value=String(end.getFullYear()+'-'+(end.getMonth()+1)+'-'+end.getDate());
        }
    </script>
    @endsection
