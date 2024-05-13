<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     * Get the value of nbWheels
     *
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }


    /**
     * Get the value of currentSpeed
     *
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * Get the value of color
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }


    /**
     * Get the value of nbSeats
     *
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }


    /**
     * Get the value of energy
     *
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }


    /**
     * Get the value of energyLevel
     *
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }


    //fonction démarrer
    public function start(): string
    {
        $this->currentSpeed = 0;
        $this->energyLevel = 50;
        return "Ready to go !!!";
    }
    //fonction avancer

    public function forward(): string
    {
        $this->currentSpeed = 15;
        $this->energyLevel--;
        return "Go !";
    }

    //fonction freiner

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}
