<?php
class PassengerCar extends Car{
	private $passengers;

	
	public function __construct($color,$price,$max_speed){
		parent::__construct($color,$price,$max_speed);
	}
	public function getIn()
}