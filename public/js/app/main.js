require.config({
    paths: {
        'jquery': '/js/libs/jquery/dist/jquery.min',
        'angular': '/js/libs/angular/angular.min',
        'angular-route': '/js/libs/angular-route/angular-route.min',
        'ui-bootstrap': '/js/libs/angular-bootstrap/ui-bootstrap-tpls.min',
        'domReady': '/js/libs/requirejs-domready/domReady',
        'angularAMD': '/js/libs/angularAMD/angularAMD.min',
        'ngload': '/js/libs/angularAMD/ngload.min',
        'angular-ui-router': '/js/libs/angular-ui-router/release/angular-ui-router.min',
        //App
        'bootstrap': '/js/app/bootstrap',
        'app': '/js/app/app',
        //'routes': '/js/app/routes1',
        //Controllers
        'processController': '/js/app/controllers/processController',
        //Services
        'processService': '/js/app/services/processService',
        //Directives
        'directives': '/js/app/directives',
        //Filters
        'filters': '/js/app/filters',
        //Services
        'services': '/js/app/services'
    },
    shim: {
        'angular': {
            exports: 'angular'
        },
        'angular-ui-router': {
            deps: ['angular']
        },
        'angularAMD': {
            deps: ['angular']
        },
        'ui-bootstrap': {
            deps: ['angular']
        },
        'angular-route': {
            deps: ['angular']
        }
    },
    deps: ['app']
});