<?php
include 'includes/personstatics.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Properties and Methods</title>
</head>

<body>
    <?php
    $person = new PersonStaticClass();
    var_dump($person); //note this object does not have any static information
    echo '<br>';

    echo PersonStaticClass::$country; //getting static property directly
    echo '<br>';

    PersonStaticClass::$country = 'India'; //setting static property directly
    echo PersonStaticClass::$country;

    PersonStaticClass::setStaticCountry('Canada'); //setting static through static method
    echo '<br>';
    echo PersonStaticClass::getStaticCountry(); //getting static through static method
    echo '<br>';

    $person->setRegularCountry('Brazil'); //setting static through regular method. Note the use of object.
    echo $person->getRegularCountry(); //accessing static through regular method

    PersonStaticClass::setStaticCountry("UK"); //
    echo '<br>';
    echo PersonStaticClass::getStaticCountry(); //accessing static property through static function
    echo '<br>';
    echo PersonStaticClass::$country; //accessing static property directly
    ?>
</body>

</html>