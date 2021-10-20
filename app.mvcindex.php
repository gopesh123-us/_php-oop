<?php
include './includes/autoloader.inc.php';
// include './classes/dbh.class.php';
// include './classes/users.class.php';
// include './classes/usersview.class.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Demo</title>
</head>

<body>
    <?php

    $userView = new UserView();
    $userView->showUser('Gopesh');

    $userController = new UserContr();
    $userController->createUser('Jackie', 'Chan', '1968-01-01');

    ?>
</body>

</html>