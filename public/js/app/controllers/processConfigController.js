appAlexandra.controller('processConfigController', function ($scope, $location, processConfigService) {
    $scope.process = null;

    $scope.getProcess = function () {
        //console.log($location.path());
        id = 1;
        processConfigService.getProcess(1, function (response) {
            $scope.process = response;
        });
    };

    $scope.getProcess();
});