<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    public function addVehicule(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->setCurrentVehicle($vehicle);
        }
    }
}