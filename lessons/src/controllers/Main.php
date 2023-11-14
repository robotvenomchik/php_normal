<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Main as Model_main;
class Main
{
    public function handle() {
        $h=new Model_main();
        $j=$h->findAll();
        Viewer::view("Main/index" , $j);
    }
    public function create(){
        if (!empty($_POST)){
            $obj=new Model_main();
            $obj->insert(array_filter($_POST));
        }
        Viewer::view("Main/create");

    }
    public function update(){
        $j=[];
        if(!empty($_GET['id'])){
            $h=new Model_main();
            $j=$h->findOne($_GET['id']);
        }
        if (!empty($_POST)){
            $obj=new Model_main();
            $obj->update(array_filter($_POST), $_GET['id']);
        }
        Viewer::view("Main/update", $j);

    }
    public function delete(){
        if(!empty($_GET['id'])){
            $obj=new Model_main();
            $obj->delete($_GET['id']);
        }
        header('Location:/main');
    }

}