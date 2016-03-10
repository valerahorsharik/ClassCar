<?php
class PassengerCar extends Car{
	private $passengers = array();

	
	public function getIn(passenger $passenger){
		$passenger->state ="in car";
		$this->passengers[] = $passenger;
	}
	public function getOut(passenger $passenger){
		$passenger->state ="Out of car";
		foreach($this->passengers as $out=>$value){
			 if ($this->passengers[$out]->getId() == $passenger->getId()){
				unset($this->passengers[$out]); 
			 } 
		}  
			
	} 
		
	
	public function getPassengers(){
		
		 foreach($this->passengers as $show){
			echo $show->getId() . "<br/>";
		} 
	}
}