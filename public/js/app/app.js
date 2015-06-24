var URLS = {
    'process_list': BASE_URL + 'process',
    'process_edit': function (id) {
        return BASE_URL + 'process/' + id + '/edit';
    }
};

var appAlexandra = angular.module('alexandra', ['ui.bootstrap']).config(
    function ($interpolateProvider) {
        $interpolateProvider.startSymbol('[[').endSymbol(']]');
    }
);

