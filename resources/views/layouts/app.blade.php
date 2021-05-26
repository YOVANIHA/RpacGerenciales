<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap/css/bootstrap.min.css')!!}">
    <link href="{!! asset('assets/vendor/fonts/circular-std/style.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('assets/libs/css/style.css')!!}">
    <link rel="stylesheet" href="{!! asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')!!}">

    <link rel="stylesheet" type="text/css" href="{!! asset('assets/vendor/datatables/css/dataTables.bootstrap4.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/vendor/datatables/css/buttons.bootstrap4.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/vendor/datatables/css/select.bootstrap4.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/vendor/datatables/css/fixedHeader.bootstrap4.css')!!}">
    <title>RPac - El Salvador</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{route('home')}}">R-Pac</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><p>{{Auth::user()->codigo_usuario}} - Usuario {{Auth::user()->obtenerRol()->nombre_rol}}</p></a>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{!! asset('assets/images/avatar-1.jpg')!!}" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{Auth::user()->codigo_usuario}}</h5>
                                    <span class="status"></span><span class="ml-2">{{Auth::user()->obtenerRol()->nombre_rol}}</span>
                                </div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fas fa-power-off mr-2"></i>
                                    Cerrar sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                   
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li> 
                            @if(Auth::user()->obtenerRol()->nombre_rol=="Táctico" || Auth::user()->obtenerRol()->nombre_rol=="Estratégico")
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('tacticos')}}"><i class="fas fa-fw fa-file"></i>Reportes tácticos</a>
                            </li>
                            @endif
                            @if(Auth::user()->obtenerRol()->nombre_rol=="Estratégico")
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('estrategicos')}}"><i class="fas fa-fw fa-file"></i>Reportes estratégicos</a>
                            </li>
                            @endif
                            @if(Auth::user()->obtenerRol()->nombre_rol=="Administrador")
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-fw fa-users"></i>Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-fw fa-list"></i>Bitácora</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
    @yield('content')
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{!! asset('assets/vendor/jquery/jquery-3.3.1.min.js')!!}"></script>
    <!-- bootstap bundle js -->
    <script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')!!}"></script>

    <script src="{!! asset('assets/libs/js/main-js.js')!!}"></script>

    <script src="{!! asset('assets/vendor/multi-select/js/jquery.multi-select.js')!!}"></script>
    <script src="{!! asset('assets/vendor/datatables/js/jquery.dataTables.min.js')!!}"></script>
    <script src="{!! asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js')!!}"></script>
    <script src="{!! asset('assets/vendor/datatables/js/data-table.js')!!}"></script>
</body>
 
</html>