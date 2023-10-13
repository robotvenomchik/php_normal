<?php
//1
abstract class My_class1 {
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
//2


abstract class My_class {
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
class Math1 extends My_class {
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

class Math2 extends My_class {
    public function some_operation() {
        return $this->get_b() / $this->get_y();
    }
}

final class Math3 extends My_class {
    protected $value;

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function performOperation() {
        return $this->value * 2;
    }
}
//3


abstract class My_class2 {
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



class Math12 extends My_class2 {
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



class Math22 extends Math12 {
    protected $pepa;
    public function some_operation() {
        return $this->get_b()/ 3  / $this->get_y()-> pepa;
    }
}

class Math223 extends Math12 {
    protected $jord;
    public function some_operation() {
        return $this->get_b() / 2 ** $this->get_y()-> jord;
    }
}



class Math124 extends My_class {
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



class Math225 extends Math124 {
    protected $pepa;
    public function some_operation() {
        return $this->get_b()/ 3  / $this->get_y()-> pepa;
    }
}

class Math2235 extends Math124 {
    protected $jord;
    public function some_operation() {
        return $this->get_b() / 2 ** $this->get_y()-> jord;
    }
}


