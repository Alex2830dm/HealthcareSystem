@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Doctores</h1>
    </center>
</div>
<div class="container-sm">
    <form action="{{url('usuarios/registrar-cita')}}" method="post">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="id">Usuario</label>
                <input type="text" name="id_usuario" id="id_usuario" class="form-control" value="{{ Auth::user()->id }}">
            </div>
            <div class="col-4">
                <label for="id">Doctor</label>
                <input type="text" name="id_doctor" id="id_doctor" class="form-control" value="{{$citas->id}}">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="fecha"></label>
                <input type="date" name="Fecha" id="fecha" class="form-control">
            </div>
            <div class="col-4">
                <label class="text-center">Doctor:</label>
                <input class="form-control" type="text" name="doctor" value="{{$citas->Nombre}}">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label class="text-center">Usuario:</label>
                <input class="form-control" type="text" name="usuario" value="{{Auth::user()->name}}">
            </div>
            <div class="col-4"><br>
            <input type="submit" class="btn btn-outline-success" value="Confirmar">
            </div>
        </div>
    </form>        
        <!--<div class="col-4">
            <label class="text-center">Foto del Doctor:</label><br>
            <img src="{{asset('Fotos_perfil/'.$citas->imagen)}}" width="200" height="auto">
        </div>
        <div class="col-4">
            <label class="text-center">Nombre:</label>
            <input class="form-control" type="text" name="nombre" value="{{$citas->Nombre}}">
            <label class="text-center">Apellido:</label>
            <input class="form-control" type="text" name="apellido" value="{{$citas->Apellidos}}">
            <label class="text-center">Cedula:</label>
            <input class="form-control" type="text" name="cedula" value="{{$citas->Cedula}}">
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-8">
            <label class="text-center">Direccion:</label>
            <input class="form-control" type="text" name="direccion" value="Carretera Huitzizilapan 1">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <label class="text-center">Precio En Consultario:</label>
            <input class="form-control" type="text" name="direccion" value="Carretera Huitzizilapan 1">
        </div>
        <div class="col-4">
            <label class="text-center">Precio A Domicilio:</label>
            <input class="form-control" type="text" name="direccion" value="Carretera Huitzizilapan 1">
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-8"> 
            <select aria-label="zona" name="zona" id="zona" title="zona" class=" form-control">
                <option value="0">Selecciona tu Municipio</option>
                <option value="Lerma">Lerma</option>
                <option value="Xonacatlan">Xonacatlan</option>
                <option value="Toluca">Toluca</option>
                <option value="Metepec">Metepec</option>
                <option value="Ocoyoacac">Ocoyoacac</option>
            </select> <br> <input name="suma" type="button" onClick="valor()" value="Buscar valor" class="btn btn-info" /><br><br>
            <label for='n2'>Precio adicional:</label>
            <input  type='text' id='n2' size='4' maxlength='5' class='form-control' readonly/><br>                        
        </div> 
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <label for="resultado">Sub Total:</label>         
            <input type="text" id="resultado" class="form-control" readonly/>                        
        </div>             
    </div>                  
    <div class="row justify-content-center">
        <font face="Comic Sans MS,Arial,Verdana" size=2 color="#AFAFAF">
        Nota: el precio puede aumentar de acuerdo al equipo y/o medicamento que utlice el doctor<br>
        Solo se acepta pagos por efectivo                 
        </font> 
        <div class="col-8">
            <button class="btn btn-sm btn-outline-success btn-block" type="submit">Enviar</button>
        </div>
    </div><br>
    </form>       
    <div class="row justify-content-center">
        <div class="col-4">
            <button type="button" class="btn btn-outline-info">Agendar Cita</button>
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-outline-secondary">Llamar Urgente</button>
        </div>
    </div>-->
</div>
@endsection