<?php 

class Animal {
	
	private $species;
	private $isMammal;

	function __construct(string $species, bool $isMammal) {
		$this->species = $species;
		$this->isMammal = $isMammal;
	}

	function setSpecies($theSpecies){
		$this->species = $theSpecies;
	}

	function getSpecies(){
		return $this->species;
	}

	function setIsMammal($isMammal){
		$this->isMammal = $isMammal;
	}
	
	function getIsMammal(){
		return $this->isMammal;
	}

}

?>