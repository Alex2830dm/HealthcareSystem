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
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Especialidad</th>
                            <th>No Telefonico</th>
                            <th>Llamar</th>
                        </tr>    
                    </thead>
                    <tbody>
                        @foreach($doctores as $doctor)                            
                            <th>{{$doctor->Cedula}}</th>
                            <th>{{$doctor->Nombre}}</th>
                            <th>{{$doctor->Apellidos}}</th>
                            <th>{{$doctor->Especialidad}}</th>
                            <th>{{$doctor->Telefono}}</th>
                            <td><a href="tel:{{$doctor->Telefono}}"><img src="https://image.flaticon.com/icons/png/512/40/40316.png" width="20"></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>    
@endsection