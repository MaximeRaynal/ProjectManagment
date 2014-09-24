projectManagmentApp.controller('ProjectsListCtrl', function ($scope, $http) {
    $http.get('api/projects.json').success(function(data) {
        $scope.projects = data;
    });
});