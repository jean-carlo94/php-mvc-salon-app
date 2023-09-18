<?php

namespace Controllers;

use MVC\Router;

class LoginController {
    public static function login(Router $router) {
        $router->render('auth/login');
    }

    public static function logout() {
        echo "Desde logout";
    }

    public static function reset() {
        echo "Desde reset";
    }

    public static function restore() {
        echo "Desde restore";
    }

    public static function register() {
        echo "Desde register";
    }
}