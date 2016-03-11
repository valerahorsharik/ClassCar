<?php
class SportCar extends Car
{
    private $spoiler;
		
    public function getMaxSpeed()
    {
        return ($this->spoiler ? $this->max_speed * 1.1 : $this->max_speed) ;
    }
		
    public function setSpoiler()
    {
        $this->spoiler = true;
    }
		
    public function removeSpoiler()
    {
        $this->spoiler = false;
    }
		
    public function getSpoiler()
    {
        return ($this->spoiler?"Spoiler installed":"Spoiler is not set");
    }
}