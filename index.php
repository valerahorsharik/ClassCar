<?php

include_once "Car.php";
include_once "PassengerCar.php";
include_once "SportCar.php";
include_once "PassengerInterface.php";
include_once "Creature.php";
include_once "Human.php";

$passCar = new PassengerCar("Yellow",1200,130);

$Volodya = new Human(25);
$Illya = new Human(55);


$passCar->getIn($Volodya);
$passCar->getIn($Illya);

print "ECHO all passengers<br/>";
echo $passCar->getPassengers();

$passCar->getOut($Illya);
print "Echo all passengers after delete 1 of them<br/>";
echo $passCar->getPassengers();
echo $Volodya->getState();
echo $Volodya->getId() . "<br/>";
echo $Illya->getId() . "<br/>";


?>