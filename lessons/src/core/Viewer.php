<?php

namespace src\core;

class Viewer
{
    public static function view(string $view_name, array $data = []):void
    {
        extract($data);
        include __DIR__ . "\\..\\..\\view\\" . $view_name . ".php";

    }
}