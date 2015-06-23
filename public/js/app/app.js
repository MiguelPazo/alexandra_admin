var appAlexandra = angular.module('alexandra', []).config(
    function ($interpolateProvider) {
        $interpolateProvider.startSymbol('[[').endSymbol(']]');
    }
);

