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
            <table class="table table-hover table-striped table-info">
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
                        <button data-toggle="modal" data-target="#guardarModal" type="button" class="justify-content-center btn btn-secondary">
                                Ver Detalles
                            </button>
                            <a href="{{url('usuarios/agenda-cita/'. $doctor->id)}}">
                                <button class="btn btn-info">
                                    Agendar Cita
                                </button>
                            </a>
                        </th>
                    </tr>
                    @endforeach                    
                </toby>  
            </table>                                    
                <!--<doctores-component>
                </doctores-component>-->                           
        </div>
    </div>
</div>
<div class="modal fade" id="guardarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalles del Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                    
                <div class="row">
                    <div class="col-5">
                        <label for="recipient-Nombre" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" name="Nombre">
                    </div>
                    <div class="col-5">
                        <label for="recipient-Apellidos" class="col-form-label">Apellidos:</label>
                        <input type="text" class="form-control" name="Apellidos">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="recipient-Cedula" class="col-form-label">Cedula:</label>
                        <input type="text"  class="form-control" name="Cedula">
                    </div>
                    <div class="col-5">
                        <label for="recipient-Especialidad" class="col-form-label">Especialidad:</label>
                        <input type="text"  class="form-control" name="Especialidad">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="recipient-Direccion" class="col-form-label">Direccion:</label>
                        <input type="text"  class="form-control" name="Direccion">
                    </div>                            
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="recipient-Direccion" class="col-form-label">Direccion:</label>
                        <input type="text"  class="form-control" name="Direccion">
                    </div>
                    <div class="col-5">
                        <label for="recipient-Telefono" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" name="Telefono">
                    </div>
                </div>                    
                <div class="row">
                    <div class="col-5">
                        <label for="recipient-Zona" class="col-form-label">Zona:</label>
                        <input type="text" class="form-control" name="Zona">
                    </div>                            
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="recipient-consulta" class="col-form-label">$ Consulta:</label>
                        <input type="text" class="form-control" name="consulta">
                    </div>
                    <div class="col-5">
                        <label for="recipient-consultadom" class="col-form-label">$ Consulta A Domicilio:</label>
                        <input type="text" class="form-control" name="consultadom">
                    </div>
                </div>                                                                                                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" name="action" class="btn btn-primary">Guardar</button>
            </div>                
        </div>                        
    </div>    
    </div>
@endsection