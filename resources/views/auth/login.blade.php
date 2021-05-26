@extends('layouts.login')

@section('content')
<div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a class="navbar-brand" style="color:#3947FA;font-size:40px;">R-Pac</a><span class="splash-description">Por favor ingrese la información de su cuenta</span></div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input id="codigo_usuario" type="text" class="form-control form-control-lg @error('codigo_usuario') is-invalid @enderror" name="codigo_usuario" value="{{ old('codigo_usuario') }}" required autocomplete="codigo_usuario" autofocus placeholder="Usuario">
                        @error('codigo_usuario')
                            <span class="invalid-feedback" role="alert">
                                <strong>El usuario no existe o la contraseña es incorrecta</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>El usuario no existe o la contraseña es incorrecta</strong>
                            </span>
                        @enderror
                    </div>

                    <!--<div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>-->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>
            <!--<div class="card-footer bg-white p-0  " style="text-align:center;">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>-->
        </div>
    </div>
@endsection
