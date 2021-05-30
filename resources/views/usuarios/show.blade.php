@extends('layouts.app')
@section('content')
<div class="row align-items-center justify-content-center">
    <div class="col-lg-6 col-md-8">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-lg btn-link navbar-left" aria-expanded="true">
                    Datos generales
                </button>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row"> Nombre:</th>
                            <td>{{ $usuario->nombres }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Apellidos:</th>
                            <td>{{ $usuario->apellidos }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Correo electronico:</th>
                            <td>{{ $usuario->email}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Estado:</th>
                            @if( $usuario->estado==1)
                            <td> Activo</td>
                            @else
                            <td> Inactivo</td>
                            @endif
                        </tr>
                        <tr>
                            <th scope="row">Telef&oacute;no:</th>
                            <td>{{ $usuario->telefono}}</td>
                        </tr>
                        <tr>
                            <th scope="row">DUI:</th>
                            <td>{{ $usuario->dui }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Cuenta creada el:</th>
                            <td>{{ $usuario->created_at }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Rol:</th>
                            @if($usuario->rol_id==1)
                            <td scope="row"><span class="text-info"> Es Administrador</span> </td>
                            @elseif($usuario->rol_id==2)
                            <td scope="row"><span class="text-info"> Es usuario Estrateg&iacute;co </span> </td>
                            @else
                            <td scope="row"><span class="text-info"> Es usuario T&aacute;ctico </span> </td>
                            @endif
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                <a href="{{route('users-index')}}" class="btn btn-info float-left">Regresar</a>
            </div>
        </div>
    </div>

</div>
@endsection