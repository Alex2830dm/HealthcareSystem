@extends('layouts.app2')

@section('content')
<br><br>
<div class="container">
<table>
    <caption>Inicia sesión o regístrate para que puedas tener una consulta a domicilio con el doctor que sea de tu agrado </caption>
        <tr>
            <td>
                <form method="POST" action="{{ route('login') }}">
                @csrf

                    <a href="../Inicio/index.php"><img class="mb-4" src="{{asset('images/Logo2.png')}}"  width="150" height="100"></a>
                    <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>

                    <label for="correo" class="sr-only">Correo Electrónico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <label for="contraseña" class="sr-only">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Recordarme
                        </label>
                    </div>                    
                    <div class="row">
                        <div class="col-3">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Olvidaste Tu Contraseña
                                    </a>
                                @endif
                        </div>
                        <div class="col-2"></div>
                        <div class="col-7  order-md-2">
                            <button class="btn btn-sm btn-outline-success btn-block" type="submit">Inicia Sesión</button>
                        </div>
                    </div>
                </form>
            </td>
            <td></td><td><td>
            <td align="center">
                <img class="mb-4" src="{{asset('images/sesion.png')}}"  width="650" height="400">
            </td>
        </tr>
    </table>
    
</div>
@endsection
