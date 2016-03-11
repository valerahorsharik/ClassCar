<?php
abstract class Creature implements BecomePassenger
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