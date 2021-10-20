<?php

declare(strict_types=1);
include './includes/autoloader.inc.php';
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
    // $cc = new ChildClass();
    // $example = $cc::EXAMPLE;
    // echo $example;
    // echo '<br>';
    // $static = $cc::$staticVariable;
    // echo '<br>';
    // echo $static;
    define("MAX_LENGTH", '1000');
    ChildClass::displayStaticVariable();
    echo '<br>';
    echo MAX_LENGTH;


    ?>
</body>

</html>