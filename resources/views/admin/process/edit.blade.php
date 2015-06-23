@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Proceso: {{ $oProcess->alias }}</div>

                    <div class="panel-body">
                        {!! Form::model( $oProcess, ['route' => ['admin.process.update', $oProcess->id ], 'method' => 'PUT'
                        ]) !!}
                        @include('admin.process.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar Cambios</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
