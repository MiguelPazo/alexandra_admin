<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alexandra</title>
    <link rel="stylesheet" href="{{ asset('/js/libs/bootstrap/dist/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/js/libs/bootstrap/dist/css/bootstrap-theme.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script>
        var BASE_URL = '{{ asset('')  }}';
    </script>

    <script src="{{ asset('/js/libs/requirejs/require.js') }}" data-main="{{ asset('/js/app/main.js') }}"></script>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{--{{ Auth::user()->name }}--}}
                    </a>
                </li>
                <li>
                    <a href="{{ url('auth/logout') }}">(Salir)</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div ng-view></div>

</body>
</html>