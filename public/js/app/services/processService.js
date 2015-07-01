define([
    'angular'
], function (ng) {
    'use strict';

    return ng.module('app.services', [])
        .service('processSevice', function ($http) {
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

            this.getElections = function (id, callback) {
                $http({
                    url: URLS.process_elections(id),
                    method: 'GET'
                }).success(function (response) {
                    callback(response);
                }).error(function (response) {
                    console.log('Error: ' + response);
                });
            };
        });
});
