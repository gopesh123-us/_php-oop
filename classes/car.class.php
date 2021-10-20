<?php

class Car {

    protected $name = 'Car';
    protected $type = 'Sedan';
    private $engine = 'V4';

    private function getType() {
        $t = $this->type;
        return $t;
    }
}

class Toyota extends Car {
    public function getName() {
        $a = $this->name;
        return $a;
    }

    public function getType() {
        $t1 = $this->type;
        return $t1;
    }    
}
