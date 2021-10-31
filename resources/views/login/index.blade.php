<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <img src="{{ asset('img/agil.png') }}" class="img-fluid" />
            </div>
            <p>Login.</p>
            <form class="m-t" role="form" action="{{ url('/authenticate') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input class="form-control" placeholder="Usuario" required="" name="usuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Iniciar sesión</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.js')}}"></script>

</body>

</html>
