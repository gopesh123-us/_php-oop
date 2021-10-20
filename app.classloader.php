<?php
declare(strict_types = 1);
include './includes/autoloader.inc.php';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Class Loaders OOPS</title>
</head>
<body>

	<?php
		$animal = new Animal('Cat', true);
		print_r($animal->getSpecies());
		echo '<br>';
		print_r($animal->getIsMammal());
		
		echo '<br>';
		echo '<br>';

		$fan = new Fan('Lakso','Pedestal','Black');
		print_r($fan->getName());
		echo ', ';
		print_r($fan->getType());
		echo ', ';
		print_r($fan->getColor());
	?>
	
</body>
</html>