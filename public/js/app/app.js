define([
    'angularAMD',
    //'processController',
    'angular-ui-router'
], function (angularAMD) {

    var app = angular.module('appAlexandra', ['ui.router']);

    //app.controller('processController', processController);

    app.config(function ($stateProvider, $urlRouterProvider) {
        $stateProvider.state('home', angularAMD.route({
            url: '/',
            templateUrl: 'view/process.view',
            controller: 'processController',
            controllerUrl: '/js/app/controllers/processController.js',
            navTab: 'home'
        }));
    });
});