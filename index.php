<?php
/* include_once "PassengerCarInterface.php";
include_once "Car.php";
include_once "PassengerCar.php";
include_once "SportCar.php";
include_once "PassengerInterface.php";
include_once "Creature.php";
include_once "Human.php"; */

function __autoload($class_name) {
	  $path = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
    include_once ("$path.php");
}
$passCar = new cars\PassengerCar("Yellow",1200,130);

$Volodya = new cars\Human(25);
$Illya = new cars\Human(55);


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