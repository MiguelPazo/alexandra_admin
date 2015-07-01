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



