<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle img-fluid" src="{{ asset('img/agil.png') }}" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Ágil</span>
                        <span class="text-muted text-xs block">Nombre del Grupo <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Perfil</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.html">Salir</a></li>
                    </ul>
                </div>
                <div class="logo-element"> TOO </div>
            </li>

            <li><a href="{{ url('/') }}"><i class="fa fa-calendar"></i> <span class="nav-label">Calendario</span>  </a></li>
            <li><a href="{{ url('/reservar') }}"><i class="fa fa-book"></i> <span class="nav-label">Reservar</span>  </a></li>  
            <li>
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Recursos</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('/aula') }}">Aulas</a></li>
                    <li><a href="{{ url('/carrera') }}">Carreras</a></li>
                    <li><a href="{{ url('/facultad') }}">Facultades</a></li>
                    <li><a href="{{ url('/materia') }}">Materias</a></li>
                    <li><a href="{{ url('/docente') }}">Docentes</a></li>
                    <li><a href="{{ url('/grupo') }}">Grupos</a></li></li>
                </ul>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-clipboard"></i> <span class="nav-label">Reportes</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('/usuario')}}">Informacion de aula</a></li>
                    <li><a href="{{ url('/tipoaula')}}">Informacion para docente</a></li>
                </ul>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-cog"></i> <span class="nav-label">Configuracion</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('/usuario')}}">Usuarios</a></li>
                    <li><a href="{{ url('/tipoaula')}}">Tipo Aulas</a></li>
                </ul>
            </li>

           
        </ul>

    </div>
</nav>