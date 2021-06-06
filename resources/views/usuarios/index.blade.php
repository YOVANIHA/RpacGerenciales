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
                                    <li class="breadcrumb-item active" aria-current="page">Gesti&oacute;n de Usuarios
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
            <!-- basic table  -->
            <!-- ============================================================== -->
            <!-- Main content -->
            <section class="content">
                @if (session('fail'))
                <div class="container">
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {!! session('fail') !!}
                    </div>
                </div>
                @endif
                @if (session('info'))
                <div class="container">
                    <div class="alert alert-info alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {!! session('info') !!}
                    </div>
                </div>
                @endif
                @if (session('success'))
                <div class="container">
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {!! session('success') !!}
                    </div>
                </div>
                @endif
            </section>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-8">
                                    Usuarios registrados en el sistema
                                    <a href="{{route('usuarios.create')}}"
                                        class="btn btn-sm btn-primary ml-5 pull-right">
                                        Agregar nuevo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead style="background-color:black;text-align:center;">
                                        <tr>
                                            <th style="color:white;">#</th>
                                            <th style="color:white;">Nombre</th>
                                            <th style="color:white;">Apellido</th>
                                            <th style="color:white;">Rol</th>
                                            <th style="color:white;">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($usuarios as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->nombres}}</td>
                                            <td>{{$user->apellidos}}</td>
                                            <td>{{$user->nombre_rol}}</td>
                                            <td>
                                                <div class="btn-group text-nowrap">
                                                    <a href="{{ route('usuarios.show', $user->id) }}"
                                                        class="btn btn-sm btn-info mr-2" role="button">
                                                        Ver Detalles</a>
                                                    <a href="{{ route('usuarios.edit', $user->id) }}"
                                                        class="btn btn-sm btn-success mr-2" role="button">
                                                        Editar</a>
                                                    <form action="{{ route('usuarios.destroy', $user->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-sm btn-danger open-modal">
                                                            Eliminar</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <h3 style="color:red;text-align:center;">No se encontraron usuarios resgistrados
                                        </h3>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

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
@include('usuarios.partials.modal-delete')

@endsection