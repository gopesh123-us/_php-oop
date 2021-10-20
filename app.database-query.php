<?php
include './includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Querying Database</title>
</head>

<body>
    <?php
    $testObj = new Test();
    $testObj->getUsers();
    echo '<br>';
    //$testObj->setUsersStmt('Karen', 'Adams', '2009-01-12');
    ?>
</body>

</html>