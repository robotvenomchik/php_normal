<?php

namespace src\controllers;

use src\core\Viewer;

class Error
{
    public function handle() {
        Viewer::view("Error");
    }
}