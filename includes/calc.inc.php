<?php

declare(strict_types=1);
include 'autoloader.inc.php';

//capture values from post request
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['oper'];

    try {
        $calc = new Calc((int)$num1, (int)$num2, (string)$oper);
        $result = $calc->calculate();
        echo $result;
    } catch (\Throwable $th) {
        throw $th->getMessage();
    }
} else {
    echo 'Error!';
}
