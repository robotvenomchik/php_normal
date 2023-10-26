<?php

namespace src\controllers;

use src\core\Viewer;

class About
{
    function handle()
    {
        Viewer::view("About");
    }
}