@extends('layouts.app')
@section('content')
<div class="row align-items-center justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Actualizar información de usuario</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('usuarios.update', $usuario->id) }}" method="POST" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="card-body">
                    @include('usuarios.partials.form')
                </div>
                <!-- /.card-body -->
                @include('usuarios.partials.form-footer')
            </form>
        </div>
    </div>
</div>
@endsection