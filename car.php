<?php
class Car
{
    private $color;
    private $price;
    protected $max_speed;

    public function getColor()
    {
        return $this->color;
    }
		
    public function getPrice()
    {
        return $this->price;
    }
		
    public function getMaxSpeed()
    {
        return $this->max_speed;
    }

    public function __construct($color,$price,$max_speed)
    {
        $this->color = $color;
        $this->price = $price;
        $this->max_speed = $max_speed;
    }
}

