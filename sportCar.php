<?php

class SportCar extends Car{
	private $spoiler;
	public function __construct($color,$price,$max_speed){
	}
	public function getMaxSpeed(){
		return ($this->spoiler ? $this->max_speed * 1.1 : $this->max_speed) ;
	}
	public function setSpoiler(){
	return ($this->spoiler = true);
	
	}
	public function removeSpoiler(){
		return ($this->spoiler = false);
	}
	public function getSpoiler(){
		return ($this->spoiler?"Спойлер установлен":"Спойлер не установлен");
	}
}