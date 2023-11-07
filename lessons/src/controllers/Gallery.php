<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Gallery as Model_gallery;
class Gallery
{
    public function handle() {
        $h=new Model_gallery();
        $h->findAll();
        Viewer::view("Gallery/index");
    }
    public function create(){
        var_dump($_POST);
        if (!empty($_POST)){
            $obj=new Model_gallery();
            $obj->insert(array_filter($_POST));
        }
        Viewer::view("Gallery/create");

    }
    public function update(){
        Viewer::view("Gallery/update");

    }
    public function delete(){
        echo "delete";
    }

}