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

        var loadComponent = function (component, type) {
            var path = null;

            switch (type) {
                case 1:
                    path = '/js/app/controllers/';
                    break;
                case 2:
                    path = '/js/app/services/';
                    break;
                default:
                    path = '/js/app/controllers/';
            }

            return {
                load: ['$http', function ($http) {
                    //return $http.get('/js/app/controllers/' + component + '.js').then(function (data) {
                    //    return data.data;
                    //});
                    $.getScript(path + component + '.js');
                }]
            }
        };

        $routeProvider
            .when('/', {
                templateUrl: 'view/process.view',
                controller: 'processController',
                resolve: loadComponent('processController', 1)
            })
    }]);


define([
    'angular',
    'ui-bootstrap',
    'angular-route',
    'processController',
    'processService'
], function (ng) {
    'use strict';

    return ng.module('app', [
        'app.controllers',
        'app.services',
        'ngRoute'
    ]);

    //angular.bootstrap(document, ['app']);
});
