require.config({
    paths: {
        'jquery': '/js/libs/jquery/dist/jquery.min',
        'angular': '/js/libs/angular/angular.min',
        'angular-route': '/js/libs/angular-route/angular-route.min',
        'ui-bootstrap': '/js/libs/angular-bootstrap/ui-bootstrap-tpls.min',
        'domReady': '/js/libs/requirejs-domready/domReady',
        //App
        'bootstrap': '/js/app/bootstrap',
        'app': '/js/app/app',
        'routes': '/js/app/routes',
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
        'ui-bootstrap': {
            deps: ['angular']
        },
        'angular-route': {
            deps: ['angular']
        }
    },
    deps: ['bootstrap']
});