<?php 

class Fan {

	private $name;
	private $type;
	private $color;

	function __construct(string $theName, string $theType, string $theColor){

		$this->name = $theName;
		$this->type = $theType;
		$this->color = $theColor;
	}

	function getName(){
		return $this->name;
	}

	function setName($theName) {
		$this->name = $theName;
	}

	function getType(){
		return $this->type;
	}

	function setType($theType){
		$this->type = $theType;
	}

	function getColor(){
		return $this->color;
	}

	function setColor($theColor){
		$this->color = $theColor;
	}

}

?>