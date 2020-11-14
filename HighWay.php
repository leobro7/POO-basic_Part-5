<?php


abstract class HighWay
{
    protected $currentVehicle = [];
    protected $nbLane;
    protected $maxSpeed;

    abstract public function addVehicule(Vehicle $vehicle);

    /**
     * @return array
     */
    public function getCurrentVehicle() : array
    {
        return $this->currentVehicle;
    }

    /**
     * @param array $currentVehicle
     */
    public function setCurrentVehicle($currentVehicle) : void
    {
        $this->currentVehicle []= $currentVehicle;
    }

    /**
     * @return mixed
     */
    public function getNbLane() : int
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     */
    public function setNbLane(int $nbLane) : void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed) : void
    {
        $this->maxSpeed = $maxSpeed;
    }


}