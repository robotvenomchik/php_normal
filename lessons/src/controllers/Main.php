<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Main as Model_gallery;
class Main
{
    public function handle() {
        $h=new Model_gallery();
        $h->findAll();
        Viewer::view("Main/index");
    }
    public function create(){
        var_dump($_POST);
        if (!empty($_POST)){
            $obj=new Model_gallery();
            $obj->insert(array_filter($_POST));
        }
        Viewer::view("Main/create");

    }
    public function update(){
        Viewer::view("Main/update");

    }
    public function delete(){
        echo "delete";
    }

}