@extends('layouts.app2')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Doctores</h1>
    </center>
</div>   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">                
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Especialidad</th>                            
                        </tr>    
                    </thead>
                    <tbody>
                        @foreach($doctores as $doctor)
                            <th><img src="{{asset('Fotos_perfil/'.$doctor->imagen)}}" width="50"></th>
                            <th>{{$doctor->Cedula}}</th>
                            <th>{{$doctor->Nombre}}</th>
                            <th>{{$doctor->Apellidos}}</th>
                            <th>{{$doctor->Especialidad}}</th>                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>    
@endsection