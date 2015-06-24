@extends('layout')

@section('content')
    <script src="{{ asset('/js/app/services/processService.js') }}"></script>
    <script src="{{ asset('/js/app/controllers/processController.js') }}"></script>

    <div class="container" ng-controller="processController">
        <div class="row">
            <div class="col-md-12">
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
                                <th ng-repeat="(i,th) in header" ng-click="changeSorting(th.field)"
                                    ng-class="(th.field != null)? 'order': ''">
                                    <span ng-show="selectedClm(th.field)" ng-class="selectedClass(th.field)"
                                          class="glyphicon"></span>
                                    [[ th.column ]]
                                </th>
                            </tr>
                            <tr ng-repeat="process in lstProcess | filter:processSearch | orderBy:sort.field:sort.reverseSort track by $index">
                                <td>[[ $index + 1 ]]</td>
                                <td>[[ process.alias ]]</td>
                                <td>[[ process.description ]]</td>
                                <td>[[ process.date_begin ]]</td>
                                <td>[[ process.date_end ]]</td>
                                <td>
                                    <span ng-show="(process.status == 'active')? true:false"
                                          class="btn-lg glyphicon glyphicon-ok-circle text-success">
                                    </span>
                                </td>
                                <td>
                                    <a href="">
                                        <span class="glyphicon glyphicon-align-justify"></span>
                                    </a>
                                    <a href="" ng-click="proccessEdit(process.id)">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="" popover-placement="bottom" popover="On the Bottom!" popover-trigger="focus" popover-title="¿Esta seguro?">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
