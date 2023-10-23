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


$route = isset($_GET['route']) ? $_GET['route'] : '';

$controllerClassName = "src\\controllers\\" . ucfirst($route);
if (class_exists($controllerClassName)) {
    $controller = new $controllerClassName();
    $controller->handle();
} else {
    $controller = new Error();
    $controller->handle();
}