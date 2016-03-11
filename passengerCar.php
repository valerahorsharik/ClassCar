<?php
class PassengerCar extends Car implements PassengerCarInterface
{
    const IN = "In car" ;
    const OUT = "Out of car" ;

    private $passengers = array();
		
    public function getIn(PassegerInterface $passenger)
    {
        $passenger->state = self::IN;
        $this->passengers[] = $passenger;
    }
		
    public function getOut(PassegerInterface $passenger)
    {
        $passenger->state = self::OUT;
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