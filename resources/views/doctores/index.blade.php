@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Emergencias</h1>
    </center>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!--<table class="table table-hover table-striped table-info">
                <thead>
                    <tr>
                        <th>Cedula</th>          
                        <th>Nombre</th>
                        <th>Apellidos</th>                
                        <th>Especialidad</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>    
                </thead>
                <tbody>                    
                    @foreach($doctores as $doctor)
                    <tr>
                        <th>{{$doctor->Cedula}}</th>
                        <th>{{$doctor->Nombre}}</th>
                        <th>{{$doctor->Apellidos}}</th>
                        <th>{{$doctor->Especialidad}}</th>
                        <th>{{$doctor->Telefono}}</th>                    
                        <th>
                            <a href="{{url('usuarios/detalles/'. $doctor->id)}}">
                            <button type="button" class="justify-content-center btn btn-secondary">
                                Ver Detalles
                            </button>
                            </a>
                            <a href="{{url('usuarios/agenda-cita/'. $doctor->id)}}">
                                <button class="btn btn-info ">
                                    Agendar Cita
                                </button>
                            </a>
                        </th>
                    </tr>
                    @endforeach                    
                </toby>  
            </table>-->
                <doctores-component>
                </doctores-component>
        </div>
    </div>
</div>
@endsection