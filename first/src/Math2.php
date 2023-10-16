<?php
namespace src;

use src\test\My_class;

class Math2 extends My_class
{

    public function some_operation() {
        return $this->get_b() / $this->get_y();
    }
}