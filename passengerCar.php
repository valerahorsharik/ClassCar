<?php
class PassengerCar extends Car{
	private $passengers = array();

	
	public function getIn(passenger $passenger){
		$passenger->state ="in car";
		$this->passengers[] = $passenger;
	}
	public function getOut(passenger $passenger){
		$passenger->state ="Out of car";
		unset($this->passengers[$passenger]);
	}
	public function getPassengers(){
		foreach($this->passengers as $show){
			echo $show->getId() . "<br/>";
		}
	}
}