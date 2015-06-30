appAlexandra.service('processService', function ($http) {

    this.listProcesses = function (callback) {
        $http({
            url: URLS.process_list,
            method: 'GET'
        }).success(function (response) {
            callback(response);
        }).error(function (response) {
            console.log('Error: ' + response);
        });
    };

});