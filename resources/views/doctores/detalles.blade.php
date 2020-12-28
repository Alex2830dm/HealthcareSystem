@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Detalles Del Doctor {{$detalles->Nombre}}</h1>
    </center>
</div>   
<div class="container">
<div class="row">
    <div class="col-5">
        <label for="recipient-Nombre" class="col-form-label">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="{{$detalles->Nombre}}" readonly>
    </div>
    <div class="col-5">
        <label for="recipient-Apellidos" class="col-form-label">Apellidos:</label>
        <input type="text" class="form-control" name="Apellidos" value="{{$detalles->Apellidos}}" readonly>
    </div>
</div>
<div class="row">
    <div class="col-5">
        <label for="recipient-Cedula" class="col-form-label">Cedula:</label>
        <input type="text"  class="form-control" name="Cedula" value="{{$detalles->Cedula}}" readonly>
    </div>
    <div class="col-5">
        <label for="recipient-Especialidad" class="col-form-label">Especialidad:</label>
        <input type="text"  class="form-control" name="Especialidad" value="{{$detalles->Cedula}}" readonly>
    </div>
</div>
<div class="row">
    <div class="col-10">
        <label for="recipient-Direccion" class="col-form-label">Direccion:</label>
        <input type="text"  class="form-control" name="Direccion" value="{{$detalles->Direccion}}" readonly>
    </div>                            
</div>
<div class="row">
    <div class="col-5"> 
        <label for="recipient-Zona" class="col-form-label">Zona:</label>
        <input type="text" class="form-control" name="Zona" value="{{$detalles->Zona}}" readonly>                 
    </div>
    <div class="col-5">
        <label for="recipient-Telefono" class="col-form-label">Telefono:</label>
        <input type="text" class="form-control" name="Telefono" value="{{$detalles->Telefono}}" readonly>
    </div>
</div>                                    
<div class="row">
    <div class="col-5">
        <label for="recipient-consulta" class="col-form-label">$ Consulta:</label>
        <input type="text" class="form-control" name="consulta" value=" $ {{$detalles->consulta}}" readonly>
    </div>
    <div class="col-5">
        <label for="recipient-consultadom" class="col-form-label">$ Consulta A Domicilio:</label>
        <input type="text" class="form-control" name="consultadom" value=" $ {{$detalles->consultadom}}" readonly>
    </div>
</div><br>
<div class="row">
    <div class="col-5">
        <a href="{{url('usuarios/agenda-cita/'. $detalles->id)}}">
            <button class="btn btn-info btn-block">
                Agendar Cita
            </button>
        </a>
    </div>
    <div class="col-5">
        <a href="{{url('usuarios/doctores/')}}">
            <button class="btn btn-secondary btn-block">
                Ver Más Doctores
            </button>
        </a>
    </div>
</div>                       
</div>
@endsection