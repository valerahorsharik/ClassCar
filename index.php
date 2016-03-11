<?php

include_once "car.php";
include_once "passengerCar.php";
include_once "sportCar.php";
include_once "passenger.php";
$passCar = new PassengerCar("Yellow",1200,130);
$sport = new SportCar("Green",1500,150);
$sport->setSpoiler();
echo $sport->getMaxSpeed();
echo $sport->getSpoiler();
$pass1 = new Passenger();
$pass2 = new Passenger();
$pass3 = new Passenger();
$passCar->getIn($pass1);
$passCar->getIn($pass2);
$passCar->getIn($pass3);
echo "ECHO all passengers\n";
echo $passCar->getPassengers();
$passCar->getOut($pass1);
$passCar->getOut($pass3);
echo "Echo all passengers after delete 1 of them\n";
echo $passCar->getPassengers();
echo $pass1->getState();
echo $pass1->getId() . "<br/>";
echo $pass2->getId() . "<br/>";
echo $pass3->getId() . "<br/>";

?>