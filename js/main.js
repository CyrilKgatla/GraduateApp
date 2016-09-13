
var graduateModule = angular.module('graduateModule', []);

graduateModule.controller("homeController", function ($scope, $http) {

    $scope.account = {};

    $scope.Login = function () {
        $http.post("http://localhost/GraduateApp/index.php/home/login", JSON.stringify($scope.account)).then(function (result) {

             if (result.data.IsSuccessful) {
                    window.location.href = result.data.Nav;
                } else {
                    alert(result.data.Message);
                }
        });
    };
});
