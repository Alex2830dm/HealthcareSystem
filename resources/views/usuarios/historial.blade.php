@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Historial de Citas</h1>
    </center>
</div>
<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Día</th>
                    <th>Doctor</th>
                    <th>Estado</th>
                    <th></th>
                </thead>
                <tbody>
                @foreach($citas as $cita)
                    <tr>
                        <td>{{$cita->fecha}}</td>
                        <td>{{$cita->Nombre}}</td>
                        <td>{{$cita->usuario}}</td>
                        <td>
                            <a href="{{url('usuarios/detallescita/' . $cita->id)}}">
                                <button type="button" class="btn btn-primary" >
                                    Ver Detalles
                                </button>
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>                  
        </div>
    </div>
</div>    
@endsection