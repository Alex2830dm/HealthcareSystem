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
                    <tr>
                        <td>05-12-2020</td>
                        <td>Alex Martinez</td>
                        <td>Revisado</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Ver Detalles
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detalles de Cita</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>    
@endsection