<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('cssExtra')
</head>

<body class="skin-3">

    <div id="wrapper">

        @include('layout.nav')

        <div id="page-wrapper" class="gray-bg">
            
             @include('layout.header')

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-12">
                    <h2>@yield('title')</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    @yield('main')
                </div>
            </div>
        </div>

    </div>
    </div>


    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
    @yield('scriptExtra')
</body>
</html>