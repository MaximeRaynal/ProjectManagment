//Point d'entrée de l'application web
//Contient la définition de l'app et le rooting

var projectManagmentApp = angular.module('ProjectManagmentWebApp', ['ngRoute', 'projectsControllers']);

projectManagmentApp.config(['$routeProvider',
    function($routeProvider) {
        var prePath = 'bundles'
        $routeProvider.
        when('/projects', {
            templateUrl: 'views/projectsList.part.html',
            controller: 'ProjectsListCtrl'
        }).
        when('/project/id-:projectId', {
            templateUrl: 'views/projectDetail.part.html',
            controller: 'ProjectsDetailCtrl'
        }).
        otherwise({
            redirectTo: '/projects'
        });
    }]);