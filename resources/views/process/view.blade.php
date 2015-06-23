@extends('layout')

@section('content')
    <script src="{{ asset('/js/app/services/processService.js') }}"></script>
    <script src="{{ asset('/js/app/controllers/processController.js') }}"></script>

    <div class="container" ng-controller="processController">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Procesos</div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label>Buscar: </label>
                            <input class="form-control" data-ng-model="processSearch"/>
                        </div>

                        <a class="btn btn-info" href="{{ route('process.create') }}" role="button">
                            Nuevo
                        </a>

                        <p>Se han creado 5 procesos en total</p>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Alias</th>
                                <th>Nombre del Proceso</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Fin</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            <tr ng-repeat="process in lstProcess | filter:processSearch">
                                <td>[[ process.id ]]</td>
                                <td>[[ process.alias ]]</td>
                                <td>[[ process.description ]]</td>
                                <td>[[ process.date_begin ]]</td>
                                <td>[[ process.date_end ]]</td>
                                <td>[[ process.status ]]</td>
                                <td>
                                    <a href="">Eleccion</a>
                                    <a href="">Editar</a>
                                    <a href="">Eliminar</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
