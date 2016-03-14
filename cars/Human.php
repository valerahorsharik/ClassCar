<?php
namespace cars;
class Human extends Creature implements PassegerInterface
{
    public $state;
    private $id;
		
		
		public  function __construct()
    {
        $this->id = uniqid();
    }
		
    public function getState()
    {
        return $this->state;
    }
		
    public function getId()
    {
        return $this->id;
    }
}