//Point d'entrée de l'application web
//Contient la définition de l'app et le rooting

var projectManagmentApp = angular.module('ProjectManagmentWebApp', ['ngRoute', 'ProjectsListCtrl']);

projectManagmentApp.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
        when('/projects', {
            templateUrl: 'views/projectsList.part.html',
            controller: 'ProjectsListCtrl'
        }).
        when('/projects/:projectId', {
            templateUrl: 'views/projectDetail.part.html',
            controller: 'ProjectCtrl'
        }).
        otherwise({
            redirectTo: '/projects'
        });
    }]);