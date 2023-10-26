<?php
namespace src\controllers;

use src\core\Viewer;
use src\models\Users;
class Main
{
    public function handle() {
        $obj=new Users();
        $data['data']=$obj->findAll();
        Viewer::view("Main", $data);

    }
}