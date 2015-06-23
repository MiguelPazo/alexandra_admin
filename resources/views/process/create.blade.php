@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Proceso</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'process.store', 'method' => 'POST' ]) !!}
                        @include('process.partials.fields')
                        <button type="submit" class="btn btn-default">Registrar</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
