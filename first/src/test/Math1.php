<?php
namespace src\test;

use src\test\My_class;
class Math1 extends My_class
{

    protected $all;

    public function getExtraValue() {
        return $this->all;
    }

    public function setExtraValue($all) {
        $this->all = $all;
    }

    public function To_Power_Y() {
        return $this->get_b() ** $this->get_y() + $this->all;
    }
}