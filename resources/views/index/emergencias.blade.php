@extends('layouts.app2')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Emergencias</h1>
    </center>
</div>   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">        
            <div class="card">                                                     
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Institucion</th>
                            <th>Zona</th>
                            <th>No. Telefono</th>
                            <th>Llamar</th>
                        </tr>    
                    </thead>
                    <tbody>
                        @foreach($emergencias as $emergencia)
                        <tr>
                            <td>{{$emergencia->Institucion}}</td>
                            <td>{{$emergencia->Zona}}</td>
                            <td>{{$emergencia->Telefono}}</td>
                            <td><a href="tel:{{$emergencia->Telefono}}"><img src="https://image.flaticon.com/icons/png/512/40/40316.png" width="20"></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>    
@endsection