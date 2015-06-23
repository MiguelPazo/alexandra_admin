<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alexandra Voting</title>

    <link rel="stylesheet" href="{{ asset('/css/libs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/libs/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href=""/>

    <!--[if lt IE 9]>
    <script src="{{ asset('/js/libs/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/js/libs/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if (!Auth::guest())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<script src="{{ asset('/js/libs/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('/js/libs/bootstrap.min.js') }}"></script>
</body>
</html>
