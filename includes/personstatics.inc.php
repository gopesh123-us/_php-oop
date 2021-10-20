<!-- index file - app.statics.php -->
<?php

class PersonStaticClass {

    //Properties and Methods goes here
    private $info = "This is some info";
    private $color = "Red";
    private $isExists = true;

    public static $country = 'USA';

    public static function setStaticCountry($country) {
        self::$country = $country;
    }
    public static function getStaticCountry() {
        return self::$country;
    }

    //setting statics from within regular methods
    public function getRegularCountry() {
        return self::$country;
    }

    public function setRegularCountry($country) {
        self::$country = $country;
    }
}
