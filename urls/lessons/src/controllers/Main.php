<?php
namespace src\controllers;

class Main
{
    public $var = 'значение по умолчанию';

    // объявление метода
    public function handle($var="something") {
        echo "Welcome to the homepage!";
        echo $this->var=$var;
    }
}