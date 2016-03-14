<?php
namespace cars;
interface PassengerCarInterface
{
    public function getIn(PassegerInterface $passenger);
    public function getOut(PassegerInterface $passenger);
    public function getPassengers();
}