appAlexandra.controller('processController', function ($scope, processService) {
    $scope.lstProcess = null;

    $scope.header = {
        0: {
            field: null,
            column: '#'
        },
        1: {
            field: 'alias',
            column: 'Alias'
        },
        2: {
            field: 'description',
            column: 'Nombre del Proceso'
        },
        3: {
            field: 'date_begin',
            column: 'Fecha de Inicio'
        },
        4: {
            field: 'date_end',
            column: 'Fecha de Fin'
        },
        5: {
            field: 'status',
            column: 'Estado'
        },
        6: {
            field: null,
            column: 'Acciones'
        }
    };

    $scope.sort = {
        field: 'date_begin',
        reverseSort: true
    };

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
        processService.listProcesses(function (response) {
            $scope.lstProcess = response;
        });
    };

    $scope.listProcesses();
});