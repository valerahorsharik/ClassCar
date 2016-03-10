<?php

class Car{
	private $color;
	private $price;
	protected $max_speed;
	
	public function getColor(){
		return $this->color;
	}
  public	function getPrice(){
		return $this->price;
	}
  public	function getMaxSpeed(){
		return $this->max_speed;
	}
	
  public	function __construct($color,$price,$max_speed){
		$this->color = $color;
		$this->price = $price;
		$this->max_speed = $max_speed;
	}
}


class PassengerCar extends Car{
	private $passengers;

	
	public function __construct($color,$price,$max_speed){
		parent::__construct($color,$price,$max_speed);
	}
	public function getIn()
}
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
class Passenger{
	
}
$car = new PassengerCar("red",10,120);
$car2 = new SportCar("blue",1200,130);
$car2->setSpoiler();
echo $car2->getSpoiler();
echo $car2->getMaxSpeed();

	
}
?>