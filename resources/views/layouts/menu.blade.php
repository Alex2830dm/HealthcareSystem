<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/home" class="nav-link active' : 'nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>Ver Perfil</p>
            </a>
        </li>
        <li class="nav-item">
            <form action="{{url('usuarios/historia')}}" method="post">
                <i class="nav-icon fas fa-users"></i>
                <input type="text" name="buscar" id="buscar" value="{{ Auth::user()->id }}">
                <button type="submit" value="Ver historial de Citas"></button>                
            </form>            
        </li>
        <li class="nav-item has-treeview">
            <a href="agenda-cita" class="nav-link">
                <i class="nav-icon far fa-sticky-note"></i>
                <p>Agendar Una Cita<i class="fas fa-angle-left right"></i></p>
            </a>                                
        </li>
    </ul>
</nav>