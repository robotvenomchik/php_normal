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
$route = isset($_GET['route']) ? $_GET['route'] : '';
$main=new Main();
$about=new About();
$gallery=new Gallery();
$error=new Error();
// Route the request
switch ($route) {
    case '':
    case 'home':
        $main->defaultRoute();
        break;
    case 'about':
        $about->aboutPage();
        break;
    case 'contact':
        $gallery->GalleryPage();
        break;
    default:
        $error-> errorRoute();
        break;
}