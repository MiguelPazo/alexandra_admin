@extends('layout')

@section('content')
    <div class="container" ng-controller="processConfigController">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $oProcess->description }}</div>
            </div>
            <div class="col-md-2">
                <div class="col-md-12">
                    <a href="#">
                        Datos Básicos
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="#">
                        Colaboradores
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="#">
                        Estado
                    </a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="panel panel-default">


                    <div class="panel-body">
                        {!! Form::model( $oProcess, ['route' => ['process.update', $oProcess->id ], 'method' => 'PUT'
                        ]) !!}
                        @include('process.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar Cambios</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/app/services/processConfigService.js') }}"></script>
    <script src="{{ asset('/js/app/controllers/processConfigController.js') }}"></script>
@endsection
