<?php
namespace src\test;

abstract class My_class1
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


    abstract public function To_Power_B();
    abstract public function To_Power_Y();
}