appAlexandra.service('processConfigService', function ($http) {
    this.getProcess = function (id, callback) {
        $http({
            url: URLS.process_get(id),
            method: 'GET'
        }).success(function (response) {
            callback(response)
        }).error(function (response) {
            console.log('Error: ' + response);
        });
    }
});