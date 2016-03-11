<?php
class PassengerCar extends Car
{
    const IN = "In car" ;
    const OUT = "Out of car" ;

    private $passengers = array();
		
    public function getIn(PassegerInterface $passenger)
    {
        $passenger->state = IN;
        $this->passengers[] = $passenger;
    }
		
    public function getOut(PassegerInterface $passenger)
    {
        $passenger->state = OUT;
        foreach ($this->passengers as $out=>$value) {
            if ($value->getId() == $passenger->getId()) {
                unset($this->passengers[$out]); 
            } 
        }  
    } 
		
    public function getPassengers()
    {
        foreach ($this->passengers as $show) {
            echo $show->getId() ;
        } 
    }
}