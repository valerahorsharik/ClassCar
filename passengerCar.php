<?php
class PassengerCar extends Car{
	private $passengers = array();

	
	public function __construct($color,$price,$max_speed){
		parent::__construct($color,$price,$max_speed);
	}
	public function getIn(passenger $passenger){
		$passenger->state ="in car";
		$this->passengers[] = $passenger;
	}
	public function getOut(passenger $passenger){
		$passenger->state ="in car";
		unset($this->passengers[$passenger]);
	}
	public function getPassengers(){
		foreach($this->passengers as $show){
			echo $show->getId() . "<br/>";
		}
	}
}