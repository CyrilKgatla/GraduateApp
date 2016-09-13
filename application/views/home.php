<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Graduate App</title>
        <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
        <script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
        <script src="<?php echo base_url('js/main.js'); ?>"></script>
    </head>
    <body ng-app="graduateModule">
        <div class="container" ng-controller="homeController">
            <form class="col-lg-3" ng-submit="Login()">
                <h2>LOGIN</h2>
                <input type="email" ng-model="account.email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" ng-model="account.password" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-default btn-block" type="submit">Sign in</button>
            </form>
        </div>
</html>