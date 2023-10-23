<?php

include "vendor\autoload.php";
use src\controllers\Main;
use src\controllers\About;
use src\controllers\Gallery;
use src\controllers\Error;
/*

$URL = $_SERVER['REQUEST_URI'];


if ($URL !== "/") {
    $path = $classPatch . substr($URL, 1);
} else {
    $path = $classPatch . "main";
}

if (!class_exists($path)) {
    $path = $classPatch . "error";
}

var_dump("21312");
*/

// Define a function to handle the default route


// Define a function to handle the about page


// Define a function to handle the contact page

// Get the current URL

// Route the request
$route = isset($_GET['route']) ? $_GET['route'] : '';
// Спробуйте автоматично завантажити клас контролера
$controllerClassName = "src\\controllers\\" . ucfirst($route);
if (class_exists($controllerClassName)) {
    $controller = new $controllerClassName();
    $controller->handle();
} else {
    // Обробити помилку, якщо клас контролера не знайдено
    $controller = new Error();
    $controller->handle();
}