appAlexandra.controller('processController', function ($scope, processService) {
    $scope.lstProcess = null;

    $scope.listProcesses = function () {
        processService.listProcesses(function (response) {
            $scope.lstProcess = response;
        });
    };

    $scope.listProcesses();
});