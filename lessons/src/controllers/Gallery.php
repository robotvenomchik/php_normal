<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Gallery as Model_gallery;
class Gallery
{
    public function handle() {
        $h=new Model_gallery();
        $j=$h->findAll();
        Viewer::view("Gallery/index" , $j);
    }
    public function create(){
        if (!empty($_POST)){
            $obj=new Model_gallery();
            $obj->insert(array_filter($_POST));
        }
        Viewer::view("Gallery/create");

    }
    public function update(){
        $j=[];
        if(!empty($_GET['id'])){
            $h=new Model_gallery();
            $j=$h->findOne($_GET['id']);
        }
        if (!empty($_POST)){
            $obj=new Model_gallery();
            $obj->update(array_filter($_POST), $_GET['id']);
        }
        Viewer::view("Gallery/update", $j);

    }
    public function delete(){
        if(!empty($_GET['id'])){
            $obj=new Model_gallery();
            $obj->delete($_GET['id']);
        }
        header('Location:/gallery');
    }

}