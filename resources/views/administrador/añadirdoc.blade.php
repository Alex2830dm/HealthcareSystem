@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Registro de Doctores</h1>
    </center>
</div>   
<form action="{{url('admin/insertar')}}" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="nombre">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control">
            </div>
            <div class="col-4">
                <label for="Apellidos">Apellido(s)</label>
                <input type="text" name="Apellidos" id="Apellidos" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="cedula">Cedula</label>
                <input type="text" name="Cedula" id="Cedula" class="form-control">
            </div>
            <div class="col-4">
                <label for="especialidad">Especialidad</label>
                <input type="text" name="Especialidad" id="Especialidad" class="form-control">
            </div><br>            
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="imagen">Añade Foto de Perfil</label>
                <input type="file" name="imagen" id="imagen" class="form-control">
            </div>                            
        </div><br>
        <div class="row justify-content-center">
            <input type="submit" class="btn btn-outline-success" value="Registrar">        
        </div>
    </div>
</form>
@endsection