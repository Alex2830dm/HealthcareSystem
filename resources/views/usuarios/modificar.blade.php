@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Modificar Datos Del Usuario: {{ Auth::user()->name }}</h1>
    </center>
</div> 
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="{{url('usuarios/update', Auth::user()->id )}}" method="POST">  
    @csrf
    {{method_field('PATCH')}}
    <div class="container-sm">   
      <div class="row justify-content-center">        
        <div class="col-4">
          <label class="text-center">Foto de Pefil:</label><br>
          <img src="https://cdn.icon-icons.com/icons2/1154/PNG/512/1486564400-account_81513.png" width="200" heigh="auto">
        </div>
        <div class="col-4">        
          <label for="nombre">Nombre:</label>
          <input type="text" name="name" id="name" class="form-control" value="{{$usuario->name}}">
          <label for="email">Correo:</label>
          <input type="text" name="email" id="email" class="form-control" value="{{$usuario->email}}">
        </div><br>    
      </div>
      <div class="row justify-content-center">
        <input type="submit" class="btn btn-outline-success" value="Actualizar">
      </div>
    </div>   
  </form>
@endsection
