@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Perfil Del Usuario: {{ Auth::user()->name }}</h1>
    </center>
</div>   
<div class="container-sm">   
    <div class="row justify-content-center">        
        <div class="col-4">
            <label class="text-center">Foto de Pefil:</label><br>
            <img src="https://static.vecteezy.com/system/resources/previews/000/574/512/non_2x/vector-sign-of-user-icon.jpg" width="220" heigh="auto">
        </div>
        <div class="col-4">
            <label class="text-center">Nombre:</label>
            <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" readonly>
            <label class="text-center">Apellido:</label>
            <input class="form-control" type="text" name="apellido" value="{{ Auth::user()->apellidos }}" readonly>
            <label class="text-center">Telefono:</label>
            <input class="form-control" type="text" name="telefono" value="{{ Auth::user()->telefono }}" readonly>
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-4">
            <label class="text-center">Correo:</label>
            <input class="form-control" type="text" name="direccion" value="{{ Auth::user()->email }}" readonly>            
        </div>        
        <div class="col-4">
            <label class="text-center">Zona:</label>
            <input class="form-control" type="text" name="zona" value="{{ Auth::user()->zona }}" readonly>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <label class="text-center">Direccion:</label>
            <input class="form-control" type="text" name="direccion" value="{{ Auth::user()->direccion }}" readonly>
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-4">
            <a href="{{url('usuarios/modificar', Auth::user()->id ) }}">
                <button type="button" class="btn btn-outline-secondary">
                    Modificar Datos                                
                </button>
            </a>
        </div>        
    </div>
</div>
@endsection