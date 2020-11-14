<?php

require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'LightableInterface.php';

$car = new Car('blue', 5, 'fuel');
echo $car->switchOn();
var_dump($car);

$bicycle = new Bicycle('red', 1);
$bicycle->setCurrentSpeed(5);
echo $bicycle->switchOn();
var_dump($bicycle);

$bike = new Bicycle('red', 1);
$bike->setCurrentSpeed(10);
echo $bike->switchOn();
var_dump($bike);

try{
    $car->start();
}catch(Exception $e){
    echo $e->getMessage();
    $car->setParkBrake();
}finally{
    echo "Ma voiture roule comme un donut.";
}



