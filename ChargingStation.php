<?php

Class ChargingStation
{
public function fullCharge(RechargeableInterface $vehicle)
{
$vehicle->charge(100);
}

}