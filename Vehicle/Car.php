<?php
require_once 'Vehicle.php';
 class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private int $energyLevel;
    public bool $hasParkBrake = true;
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    public function setParkBrake(): void
    {
        if ($this->hasParkBrake === true)
        {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
    }
    public function start(): void
    {
        if ($hasParkBrake = true) {
            throw new Exception("The handbrake is active<br> Marge says: Homeeeeer!!!! <br>");
        }
        try{

        } catch(Exception $e){
            echo "Ma voiture roule comme un donut  : ". $e->getMessage() . "n";
        } finally {
            echo "End !\n";
        }
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

  
}