<?php
declare(strict_types = 1);
include './includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy Object</title>
</head>

<body>
    <?php
    $object = new DestroyClass();     
    echo $object->getColor();
    unset($object);
    ?>
</body>

</html>