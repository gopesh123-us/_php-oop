<?php
//include './includes/person.inc.php';

// include './includes/car.inc.php';
// // $prius = new Toyota();
// // echo $prius->getName();
// // echo "<br>";
// // echo $prius->getType();

// $person01 = new Person();
// $person01->setName(nl2br("Gopesh Sharma -- 01 \n"));
// echo $person01->getName();

// $person02 = new Person();
// $person02->setName(nl2br("Vaishali Sharma -- 02 \n"));
// echo $person02->getName();
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOPs properties and inheritance</title>
</head>

<body>
    <?php
    include 'includes/person.inc.php';

    echo nl2br("==>Setting constructors\n");
    echo nl2br("\n");

    $person1 = new Person('Gopesh Sharma', 54, 'Blue');
    $person2 = new Person('Rakesh Sharma', 53, 'Brown');

    echo nl2br("==>Printing Person 1(Gopesh)\n");

    echo $person1->getName();
    echo nl2br("\n");
    echo $person1->getAge();
    echo nl2br("\n");
    echo $person1->getEyeColor();

    echo nl2br("\n");
    echo nl2br("\n");
    echo nl2br("==>Printing Person 2(Rakesh)\n");
    echo $person2->getName();
    echo nl2br("\n");
    echo $person2->getAge();
    echo nl2br("\n");
    echo $person2->getEyeColor();

    echo nl2br("\n");
    echo nl2br("\n");

    echo nl2br("==>Resetting person 2 (Rakesh) to Ram Sharma");
    $person2->setName("Ram Sharma");
    $person2->setAge(50);
    $person2->setEyeColor("Black");

    echo nl2br("\n");
    echo nl2br("==>Now printing person2\n");

    echo $person2->getName();
    echo nl2br("\n");
    echo $person2->getAge();
    echo nl2br("\n");
    echo $person2->getEyeColor();

    echo nl2br("\n");
    echo nl2br("\n");
    echo nl2br("==>Assigning person2 to person3\n");
    $person3 = $person2;

    echo nl2br("==>Printing person3\n");
    echo $person3->getName();
    echo nl2br("\n");
    echo $person3->getAge();
    echo nl2br("\n");
    echo $person3->getEyeColor();

    echo nl2br("\n");
    echo nl2br("\n");

    echo nl2br("==>Resettng person3 to Vivek\n");
    echo nl2br("\n");
    echo nl2br("\n");
    $person3->setName("Vivek Sharma");
    $person3->setAge(45);
    $person3->setEyeColor("Green-Blue");

    echo nl2br("==>Note: Printing person 2 again. It is not Ram anymore\n");
    echo $person2->getName();
    echo nl2br("\n");
    echo $person2->getAge();
    echo nl2br("\n");
    echo $person2->getEyeColor();
    ?>
</body>

</html>