<?php
namespace src\test;

abstract class My_class
{
    protected $b;
    protected $y;

    public function get_b() {
        return $this->b;
    }

    public function set_b($b1) {
        $this->b = $b1;
    }

    public function get_y() {
        return $this->y;
    }

    public function set_y($y1) {
        $this->y = $y1;
    }


    public function To_Power_B(){

    }
    public function To_Power_Y(){

    }
}