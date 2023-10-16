<?php
namespace src\test;

class Math22 extends Math12
{
    protected $pepa;
    public function some_operation() {
        return $this->get_b()/ 3  / $this->get_y()-> pepa;
    }
}