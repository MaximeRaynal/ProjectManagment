var projectsControllers = angular.module('projectsControllers', []);

projectsControllers.controller('ProjectsListCtrl', function ($scope, $http) {
    $http.get('api/projects.json').success(function(data) {
        $scope.projects = data;
    });

    $scope.orderProp = 'dateStart';
});

projectsControllers.controller('ProjectsDetailCtrl', function ($scope, $http, $routeParams) {
    $http.get('/api/project/id-' + $routeParams.projectId +'.json').success(function(data) {
        $scope.project = data;
    });
});