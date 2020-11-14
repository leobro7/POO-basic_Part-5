<?php

require_once 'Vehicle.php';

/**
 * Class Truck
 */
class Truck extends Vehicle
{
    /**
     * @var int
     */
    private $storageCapacity;
    /**
     * @var int
     */
    private $truckLoading = 0;
    /**
     * @var string
     */
    private $energy;
    /**
     * @return string
     */

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return int
     */
    public function getTruckLoading(): int
    {
        return $this->truckLoading;
    }

    /**
     * @param int $truckLoading
     */
    public function setTruckLoading(int $truckLoading): void
    {
        $this->truckLoading = $truckLoading;
    }

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return string
     */
    public function isLoaded(): string
    {
        $sentence = '';
        if ($this->truckLoading < $this->storageCapacity) {
            $sentence = 'In filling ! ';
        } elseif
        ($this->truckLoading > $this->storageCapacity)
            $sentence = 'Overloaded !';
        else {
            $sentence = 'Full ! ';
        }
        return $sentence;
    }

}