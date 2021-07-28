<?php

use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\RegistrationController;

require_once "vendor/autoload.php";

$homeController = new HomeController();
$registrationController = new RegistrationController();
$loginController = new LoginController();

$requestUri = $_SERVER['REQUEST_URI'];
try {
    if (isset($requestUri)) {
        if ($requestUri == '/') {
            $homeController->home();
        } elseif ($requestUri == '/register') {
            if (!isset($_COOKIE['email'])) {
                header('Location: /login');
            } else
                $registrationController->register($_POST);
        } elseif ($requestUri == '/login') {
            $loginController->login();
        } elseif ($requestUri == '/signup') {
            $loginController->signUp();
        } elseif ($requestUri == '/logout') {
            $loginController->logout();
        }
    }
} catch (\Exception $e) {
    echo "Error : " . $e->getMessage();
}
