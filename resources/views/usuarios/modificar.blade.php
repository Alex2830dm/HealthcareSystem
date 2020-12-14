@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Modificar Datos Del Usuario: {{ Auth::user()->name }}</h1>
    </center>
</div> 
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="{{url('usuarios/update/' . $usuario->id)}}" method="post">
@csrf
    {{method_field('PATCH')}}
<div class="container-sm">   
    <div class="row justify-content-center">        
        <div class="col-4">
            <label class="text-center">Foto de Pefil:</label><br>
            <img src="https://static.vecteezy.com/system/resources/previews/000/574/512/non_2x/vector-sign-of-user-icon.jpg" width="220" heigh="auto">
        </div>        
        <div class="col-4">
            <label class="text-center">Nombre:</label>
            <input class="form-control" type="text" name="name" value="{{ $usuario->name }}">
            <label class="text-center">Apellido:</label>
            <input class="form-control" type="text" name="apellidos" value="{{ $usuario->apellidos }}">
            <label class="text-center">Telefono:</label>
            <input class="form-control" type="text" name="telefono" value="{{ $usuario->telefono }}">
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-4">
            <label class="text-center">Correo:</label>
            <input class="form-control" type="text" name="email" value="{{ $usuario->email }}">            
        </div>        
        <div class="col-4">
            <label class="text-center">Zona:</label>
            <input class="form-control" type="text" name="zona" value="{{ $usuario->zona }}">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <label class="text-center">Direccion:</label>
            <input class="form-control" type="text" name="direccion" value="{{ $usuario->direccion }}" >
        </div>      
    </div><br>
    <div class="row justify-content-center">
        <div class="col-4">
            <button type="submit" class="btn btn-info"> Confirmar Modificacion</button>
            </a>
        </div>        
    </div>
</div>
</form>
@endsection

