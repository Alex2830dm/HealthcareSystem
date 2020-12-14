@extends('layouts.app')
@section('content')
<script type="text/javascript">
      function valor() {
        var tipo = document.getElementById("tipo").value;
          if(tipo = "Consultorio"){
            var n1 = document.getElementById("precio1").value;         
            var resultado = parseInt(n1);
          }else if(tipo = "Domicilio"){            
            var n2 = document.getElementById("precio2").value;
            var resultado = parseInt(n2)
          }
        document.getElementById("resultado").value = resultado;
      }
    </script>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Doctores</h1>
    </center>
</div>
<div class="container-sm">
    <form action="{{url('usuarios/registrar')}}" method="post">            
    <div class="row">
        <div class="col-5">            
            <input type="text"value="{{$citas->id}}" class="form-control" name="id_doctor"  id="id_doctor" readonly hidden>
        </div>
        <div class="col-5">            
            <input type="text" value="{{ Auth::user()->id }}" class="form-control" name="id_usuario" id = "id_usuario" readonly hidden>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <label for="Nombre" class="col-form-label">Doctor:</label>
            <input type="text"value="{{$citas->Nombre}}" class="form-control" name="Nombre"  id="Nombre" readonly>
        </div>
        <div class="col-5">
            <label for="" class="col-form-label">Apellidos:</label>
            <input type="text" value="{{$citas->Apellidos}}" class="form-control" name="Apellidos" id = "Apellidos" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <label for="" class="col-form-label">Paciente:</label>
            <input type="text" value="{{ Auth::user()->name }}" class="form-control" name="usuario" id="usuario">                                
        </div>
        <div class="col-5">
            <label for="" class="col-form-label">Apellidos:</label>
            <input type="text"  class="form-control" name="usuariosape" id="usuariosape" value="{{ Auth::user()->apellidos}}">
        </div>                            
    </div>
    <div class="row">
        <div class="col-5">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ Auth::user()->direccion }}">
        </div>
        <div class="col-5">
            <label for="fecha" class="col-form-label">Fecha:</label>
            <input type="date"  class="form-control" name="fecha" id="fecha">
        </div>
    </div>
    <div class="row">
        <div class="col-5">            
            <input class="form-control" type="text" value="{{$citas->consulta}}" id = "precio1"readonly hidden>
        </div>
        <div class="col-5">            
            <input type="text" class="form-control" value="{{$citas->consultadom}}" id = "precio2" readonly hidden>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <label for="tipo" class="col-form-label">Tipo:</label>
            <select name="tipo" id="tipo" class="form-control">
                <option value="Consultorio">En Consultorio</option>
                <option value="Domicilio">A Domicilio</option>
            </select>
        </div>
        <div class="col-5"><br>
        <input name="suma" type="button" onClick="valor()" value="Buscar valor" class="btn btn-info" />
        </div>
    </div>
    <div class="row">
      <div class="col-5">
        <label for="costo">Costo:</label>
        <input type="text" name="costo" id="resultado" class="form-control" readonly/>
      </div>
    </div><br>
    <button type="submit" class="btn btn-success">
        Agendar Cita
    </button>
</form>                
</div>
@endsection