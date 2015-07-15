define(function () {
    'use strict';

    var processCotroller = function ($scope, $window) {
        $scope.lstProcess = null;
        $scope.lstElections = null;
        $scope.active = null;
        $scope.header = {
            0: {
                field: null,
                column: '#',
                class: 'col_1'
            },
            1: {
                field: 'alias',
                column: 'Alias',
                class: 'col_2'
            },
            2: {
                field: 'description',
                column: 'Proceso',
                class: 'col_3'
            },
            3: {
                field: 'date_begin',
                column: 'Fecha de Inicio',
                class: 'col_4'
            },
            4: {
                field: 'date_end',
                column: 'Fecha de Fin',
                class: 'col_5'
            },
            5: {
                field: null,
                column: 'Acciones',
                class: 'col_6'
            }
        };
        $scope.sort = {
            field: 'date_begin',
            reverseSort: true
        };

        $scope.getColumnClass = function (column) {
            var cssClass = column.class;

            if (column.field != null) {
                cssClass += ' point_cursor';
            }

            return cssClass;
        }

        $scope.changeSorting = function (field) {
            if (field != null) {
                var sort = $scope.sort;
                if (sort.field == field) {
                    sort.reverseSort = !sort.reverseSort;
                } else {
                    sort.field = field;
                    sort.reverseSort = false;
                }
            }
        };

        $scope.getElections = function (id) {
            $scope.active = id;
        };

        $scope.selectedClm = function (field) {
            if (field != null) {
                if ($scope.sort.field == field) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        };

        $scope.selectedClass = function (field) {
            if (field != null) {
                if ($scope.sort.field == field) {
                    if ($scope.sort.reverseSort) {
                        return 'glyphicon-triangle-bottom';
                    } else {
                        return 'glyphicon-triangle-top';
                    }
                } else {
                    return '';
                }
            } else {
                return '';
            }
        };

        $scope.proccessEdit = function (id) {

        };

        $scope.listProcesses = function () {
            //processService.listProcesses(function (response) {
            //    $scope.lstProcess = response;
            //});
        };

        $scope.getElections = function (id) {
            //if ($scope.active != id) {
            //    processService.getElections(id, function (response) {
            //        $scope.lstElections = response;
            //        $scope.active = id;
            //    });
            //} else {
            //    $scope.active = null;
            //}
        };

        $scope.config = function (id) {
            $window.location = URLS.process_config(id);
        }

        $scope.listProcesses();
    };

    processCotroller.$inject = ['$scope', '$window'];

    return processCotroller;
});
