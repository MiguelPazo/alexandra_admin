<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Procesos</div>

                <div class="panel-body">
                    <div class="form-group">
                        <label>Buscar: </label>
                        <input class="form-control" data-ng-model="processSearch"/>
                    </div>

                    <a class="btn btn-info" href="#" role="button">
                        Nuevo
                    </a>

                    <p>Se han creado 5 procesos en total</p>

                    <div class="container_tab_process">
                        <div class="tab_header">
                            <div class="tab_row">
                                <div ng-repeat="(i,th) in header" ng-click="changeSorting(th.field)"
                                     ng-class="getColumnClass(th)">
                                        <span ng-show="selectedClm(th.field)" ng-class="selectedClass(th.field)"
                                              class="glyphicon"></span>
                                    [[ th.column ]]
                                </div>
                            </div>
                        </div>
                        <div class="tab_body">
                            <div ng-repeat-start="process in lstProcess | filter:processSearch | orderBy:sort.field:sort.reverseSort track by $index"
                                 ng-class-odd="(process.status == 'active')? 'tab_row_active':'tab_row_odd'"
                                 class="tab_row" ng-click="getElections(process.id)"
                                 ng-dblClick="config(process.id)">
                                <div class="col_1">[[ $index + 1 ]]</div>
                                <div class="col_2">[[ process.alias ]]</div>
                                <div class="col_3">[[ process.description ]]</div>
                                <div class="col_4">[[ process.date_begin ]]</div>
                                <div class="col_5">[[ process.date_end ]]</div>
                                <div class="col_6">
                                    <a href="" ng-click="config(process.id)">
                                        <span class="glyphicon glyphicon-cog"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="row row_detail" ng-repeat-end="" ng-show="active == process.id"
                                 ng-class-odd="(process.status == 'active')? 'tab_row_active':'tab_row_odd'">
                                <span>Elecciones:</span>
                                <table class="table table-striped">
                                    <tr>
                                        <th>#</th>
                                        <th>Alias</th>
                                        <th>Elección</th>
                                        <th>Votos Permitidos</th>
                                        <th>Día D</th>
                                    </tr>
                                    <tr ng-repeat="election in lstElections track by $index">
                                        <td>[[ $index + 1 ]]</td>
                                        <td>[[ election.alias ]]</td>
                                        <td>[[ election.description ]]</td>
                                        <td>[[ election.count_votes ]]</td>
                                        <td>[[ election.date ]]</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>