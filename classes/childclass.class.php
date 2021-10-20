<?php

class ChildClass extends ParentClass {
    public static $staticVariable = "This is static";

    public static function displayStaticVariable() {
        echo parent::EXAMPLE;
        echo '<br>';
        echo self::$staticVariable;
    }
}
