<nav class="main-header navbar navbar-expand navbar-info navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#">
        <i class="fas fa-bars"></i>
      </a>
    </li>
  </ul>
  <ul class="navbar-nav mr-auto">
    <H5>
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{url('/')}}">Inicio<span class="sr-only">(current)</span></a>
      </li>
    </H5>
    <H5>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="{{url('usuarios/quienes-somos')}}" role="button" aria-haspopup="true" aria-expanded="false">¿Quienes Somos?</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('usuarios/quienes-somos')}}">¿Quienes Somos?</a>
            <a class="dropdown-item" href="{{url('usuarios/unete-hs')}}">Unete a Healthceare System</a>              
          </div>
        </li>
    </H5>
    <H5>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="{{url('usuarios/primeros-auxilios')}}" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{url('usuarios/primeros-auxilios')}}">Primeros Auxilios</a>
          <a class="dropdown-item" href="{{url('usuarios/emergencias')}}">Emergencias</a>                        
        </div>
      </li>
    </H5>  
    <H5>
      <li class="nav-item active">
      <a class="nav-link text-white" href="{{url('usuarios/doctores')}}">Doctores<span class="sr-only">(current)</span></a>
      </li>
    </H5>
    </H5>
  </ul>                                
</nav>