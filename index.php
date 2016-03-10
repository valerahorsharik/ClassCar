<?php

include_once "car.php";
include_once "passengerCar.php";
include_once "sportCar.php";
include_once "passenger.php";
$passCar = new PassengerCar("Yellow",1200,130);
$pass1 = new Passenger();
$pass2 = new Passenger();
$pass3 = new Passenger();
var_dump($passCar);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
$passCar->getIn($pass1);
var_dump($passCar);
echo "<br/>";
echo "<br/>";
echo $pass1->getState();
echo "<br/>";
echo "<br/>";
echo $pass1->getId() . "<br/>";
echo $pass2->getId() . "<br/>";
echo $pass3->getId() . "<br/>";

?>