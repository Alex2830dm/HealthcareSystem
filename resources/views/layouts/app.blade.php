<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Healthcare System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="dist/js/adminlte.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">
            <!-- Navbar -->
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
                            <a class="nav-link text-white" href="{{url('usuarios/')}}">Inicio<span class="sr-only">(current)</span></a>
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
            </ul>                                
        </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ url('/') }}" class="brand-link">                                            
                    <span class="brand-text font-weight-light">Healthcare System</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="https://static.vecteezy.com/system/resources/previews/000/574/512/non_2x/vector-sign-of-user-icon.jpg" class="img-circle elevation-2" alt="User Image">                            
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                @else
                                {{ Auth::user()->name }}
                                <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar Sesion
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                                @endguest
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->                    
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="/home" class="nav-link active' : 'nav-link">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Ver Perfil</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('usuarios/historial/'. Auth::user()->id)}}">
                                    <button type="submit" class="btn btn-secondary">
                                        <img src="https://previews.123rf.com/images/jemastock/jemastock1708/jemastock170809156/84057196-un-dise%C3%B1o-de-ilustraci%C3%B3n-de-vector-de-imagen-de-icono-de-historial-de-historial-de-medicina-m%C3%A9dica-de-hobby-.jpg"
                                            width="20">
                                        Ver Historial De Consultas
                                    </button>
                                </a>
                            </li><br>
                            <li class="nav-item">
                                <a href="{{url('admin/')}}">
                                    <button class="btn btn-success">
                                        <img src="https://image.flaticon.com/icons/png/512/1713/1713277.png" width="20">
                                        Administrador
                                    </button>
                                </a>                                    
                            </li><br>                            
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">     
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>
</body>

</html>