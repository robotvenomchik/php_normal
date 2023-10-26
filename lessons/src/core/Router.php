<?php

namespace src\core;
use src\controllers\Error;

final class Router
{
    private $controllerPath = "src\\controllers\\";
    public function run()
    {
        $URL = $_SERVER['REQUEST_URI'];

        if ($URL !== "/") {
            $controller = $this->controllerPath . ucfirst(substr($URL, 1));
        } else {
            $controller = $this->controllerPath . "Main";
        }
        if (!class_exists($controller)) {
            $controller = $this->controllerPath . "Error";
        }
        $obj = new $controller();
        $obj->handle();
    }
}