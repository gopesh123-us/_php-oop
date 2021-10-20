<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($classname) {
	//create a path where we have all the class files
	$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	//echo 'URL' . $url . '<br>';
	if (strpos($url, 'includes') !== false) {
		$path = "../classes/";
	} else {
		$path = "./classes/";
	}

	$extension = ".class.php";
	$fullPath = $path . $classname . $extension;

	if (!file_exists($fullPath)) {
		echo $fullPath;
		return false;
	}

	require_once $fullPath;
}
