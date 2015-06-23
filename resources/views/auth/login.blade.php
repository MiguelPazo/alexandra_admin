@extends('layout')

@section('content')
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
@endsection
