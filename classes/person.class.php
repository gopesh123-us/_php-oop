<!-- index file - app.person.php -->

<?php
class Person {
    //properties
    private $name;
    private $age;
    private $eyeColor;

    //constructor
    function __construct($theName, $theAge, $theEyeColor) {
        $this->name = $theName;
        $this->age = $theAge;
        $this->eyeColor = $theEyeColor;
    }

    //methods
    public function setName($theName) {
        $this->name = $theName;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($theAge) {
        $this->age = $theAge;
    }

    public function getAge() {
        return $this->age;
    }

    public function setEyeColor($theEyeColor) {
        $this->eyeColor = $theEyeColor;
    }

    public function getEyeColor() {
        return $this->eyeColor;
    }
}
