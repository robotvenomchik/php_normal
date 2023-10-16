<?php
namespace src\test;

class Math3 extends My_class
{

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