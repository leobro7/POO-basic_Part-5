<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    public function addVehicule(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            $this->setCurrentVehicle($vehicle);
        }
    }
}