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

            <li>
                <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Programación Calendario</span>  </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="calendar.html">Calendario</a></li>
                </ul>
            </li>
            
            <li>
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Listados</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="listaAulas.html">Aulas</a></li>
                    <li><a href="listaDocentes.html">Docentes</a></li>
                    <li><a href="listaCarreras.html">Carreras</a></li>
                    <li><a href="listaFacultades.html">Facultades</a></li>
                    <li><a href="listaMaterias.html">Materias</a></li>
                </ul>
            </li>


            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Nuevo Registro</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('/usuario')}}">Aulas</a></li>
                    <li><a href="formularioDocentes.html">Docentes</a></li>
                    <li><a href="formularioCarreras.html">Carreras</a></li>
                    <li><a href="formularioFacultades.html">Facultades</a></li>
                    <li><a href="formularioMaterias.html">Materias</a></li>
                </ul>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-cog"></i> <span class="nav-label">Configuracion</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('/usuario')}}">Usuarios</a></li>
                    <li><a href="{{ url('/usuario')}}">Horarios aula</a></li>
                    <li><a href="{{ url('/usuario')}}">Tipo Aulas</a></li>
                </ul>
            </li>

           
        </ul>

    </div>
</nav>