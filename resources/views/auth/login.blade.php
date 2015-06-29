<!DOCTYPE html>
<html lang="es" ng-app="alexandra">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alexandra</title>
    <link rel="stylesheet" href="{{ asset('/js/libs/bootstrap/dist/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/js/libs/bootstrap/dist/css/bootstrap-theme.min.css') }}"/>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ingreso al Sistema</div>

                <div class="panel-body">
                    {!! Form::open(['to' => 'auth/login', 'method' => 'POST' ]) !!}
                    <div class="form-group">
                        {!! Form::label('email', 'E-mail:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Contraseña:') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <button type="submit" class="btn btn-default">Ingresar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>