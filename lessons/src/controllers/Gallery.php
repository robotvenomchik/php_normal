<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Gallery as Model_gallery;
class Gallery
{
    function handle() {
        $h=new Model_gallery();
        $h->findAll();
        Viewer::view("Gallery");
    }

}