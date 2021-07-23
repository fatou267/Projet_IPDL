<?php

use App\Controller\HomeController;

require_once "vendor/autoload.php";

$homeController = new HomeController();

if (isset($_SERVER['REQUEST_URI'])) {
    if ($_SERVER['REQUEST_URI'] == '/') {
        $homeController->home();
    }
}