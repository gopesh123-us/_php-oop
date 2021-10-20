<!-- index file - app.destroy-object.php -->

<?php

class DestroyClass {

    //Properties and Methods goes here
    private $info = "This is some info";
    private $color = "Red";
    private $isExists = true;

    function __construct() {
        echo 'in constructor' . '<br>';
    }

    function __destruct() {
        echo 'in destructor' . '<br>';
    }

    public function getColor() {
        return $this->color . '<br>';
    }
}
