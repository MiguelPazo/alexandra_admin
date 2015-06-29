@extends('layout')

@section('content')
    <div class="container" ng-controller="processConfigController">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">[[ process.description ]]</div>
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
                        <div class="form-group">
                            <label for="description">Proceso:</label>
                            <input name="description" type="text" ng-model="process.description" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="description_short">Descripción corta:</label>
                            <input type="text" name="description_short" ng-model="process.description_short"
                                   class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="alias">Descripción corta:</label>
                            <input type="text" name="alias" ng-model="process.alias" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="date_begin">Descripción corta:</label>
                            <input type="text" name="date_begin" ng-model="process.date_begin" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="date_end">Descripción corta:</label>
                            <input type="text" name="date_end" ng-model="process.date_end" class="form-control"/>
                        </div>

                        <button type="button" class="btn btn-default">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/app/services/processConfigService.js') }}"></script>
    <script src="{{ asset('/js/app/controllers/processConfigController.js') }}"></script>
@endsection
