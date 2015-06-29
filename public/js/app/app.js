var URLS = {
    'process_list': BASE_URL + 'process',
    'process_config': function (id) {
        return BASE_URL + 'process/config/' + id;
    },
    'process_elections': function (id) {
        return BASE_URL + 'process/' + id + '/elections';
    },
    'process_get': function (id) {
        return BASE_URL + 'process/' + id;
    }
};

var appAlexandra = angular.module('alexandra', ['ui.bootstrap', 'ngRoute'])
    .config(function ($interpolateProvider) {
        $interpolateProvider.startSymbol('[[').endSymbol(']]');
    })
    .config(['$routeProvider', '$controllerProvider', function ($routeProvider, $controllerProvider) {
        appAlexandra.registerCtrl = $controllerProvider.register;

        var loadController = function (controller) {
            return {
                load: function () {
                    //$http.get('/js/app/controllers/' + controller + '.js').then(function (data) {
                    //    return data.data;
                    //
                    //});
                    $.getScript('/js/app/controllers/' + controller + '.js');
                }
            }
        };

        $routeProvider
            .when('/', {
                templateUrl: 'view/process.view',
                controller: 'processController',
                resolve: loadController('processController')
            })
    }]);

