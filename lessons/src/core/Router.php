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
            $url_parts=explode('/', substr($URL, 1));
            $controller = $this->controllerPath . ucfirst($url_parts[0]);
        } else {
            $controller = $this->controllerPath . "Main";
        }
        if (!class_exists($controller)) {
            $controller = $this->controllerPath . "Error";
        }
        $obj = new $controller();
        if(isset($url_parts[1]) && method_exists($obj, $url_parts[1])) {
            $method_name=$url_parts[1];
            $obj->$method_name();
        } else{
            $obj->handle();
        }

    }
}