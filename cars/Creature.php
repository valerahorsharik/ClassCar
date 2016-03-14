<?php
namespace cars;
abstract class Creature 
{
    protected $BirthdayDate;
		
		public function __construct($BirthdayDate)
		{
        $this->BirthdayDate = $BirthdayDate;
		}
		public function getBirthdayDate()
		{
        return $this->BirthdayDate;
		}
}