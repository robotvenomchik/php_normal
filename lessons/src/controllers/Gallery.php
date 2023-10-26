<?php

namespace src\controllers;

use src\core\Viewer;

class Gallery
{
    function handle() {
        Viewer::view("Gallery");
    }

}