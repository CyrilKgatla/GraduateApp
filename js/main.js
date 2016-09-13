
var graduateModule = angular.module('graduateModule', []);

graduateModule.controller("homeController", function ($scope, $http) {
    console.log(localStorage);
    $scope.account = {
        remember: localStorage.remember,
        email: localStorage.email,
        password: localStorage.password
    };

    $scope.Login = function () {
        $http.post("http://localhost/GraduateApp/index.php/home/login", JSON.stringify($scope.account)).then(function (result) {

            if ($scope.account.remember)
            {
                localStorage.remember = $scope.account.remember;
                localStorage.email = $scope.account.email;
                localStorage.password = $scope.account.password;
            }

            if (result.data.IsSuccessful) {
                window.location.href = result.data.Nav;
            } else {
                alert(result.data.Message);
            }
        });
    };

    $scope.Logout = function () {
        $http.post("http://localhost/GraduateApp/index.php/home/logout").then(function (result) {
            if (result.data.IsSuccessful) {
                window.location.href = result.data.Nav;
            }
        });
    };

});



