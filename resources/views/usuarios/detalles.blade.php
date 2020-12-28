@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Detalles De La Cita Del Día: {{$citas->fecha}}</h1>
    </center>
</div>
<div class="container">
    <div class="row">
        <div class="col-5">
            <label for="">Nombre Del Doctor</label>
            <input type="text" name="nombre" class="form-control" value="{{$citas->Nombre}}" readonly>
        </div>
        <div class="col-5">
            <label for="">Apellidos Del Doctor</label>
            <input type="text" name="nombre" class="form-control" value="{{$citas->Apellidos}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <label for="">Paciente</label>
            <input type="text" name="nombre" class="form-control" value="{{$citas->usuario}}" readonly>
        </div>
        <div class="col-5">
            <label for="">Apellidos Paciente</label>
            <input type="text" name="nombre" class="form-control" value="{{$citas->usuariosape}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="">Dirreccion De Consulta</label>
            <input type="text" name="nombre" class="form-control" value="{{$citas->direccion}}" readonly>
        </div>    
    </div>
    <div class="row">
        <div class="col-5">
            <label for="">Costo De Consulta</label>
            <input type="text" name="nombre" class="form-control" value="{{$citas->costo}}" readonly>
        </div>
        <div class="col-5">
            <label for="">Día De Consulta</label>
            <input type="text" name="nombre" class="form-control" value="{{$citas->fecha}}" readonly>
        </div>
    </div><br>
    <div class="row">
        <div class="col-5">
            <!--<form action="{{url('usuarios/historial/'. Auth::user()->id)}}" method="post">-->
            <a href="{{url('usuarios/historial/'.$citas->id_usuario)}}">
                <button type="button" class="btn btn-secondary btn-block">                    
                    Ver Otras Citas
                </button>
            </a>    
            <!--</form>-->
        </div>        
    </div>    
</div>
@endsection