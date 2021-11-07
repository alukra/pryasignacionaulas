<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            @auth("web")
            <li><a href="{{ url('/logout') }}"> <i class="fa fa-sign-out"></i> Salir</a></li>
            @endauth
            @guest
            <li><a href="{{ url('/login') }}" > <i class="fa fa-sign-in"></i>Iniciar sesión</a></li>    
            @endguest
        </ul>

    </nav>
</div>